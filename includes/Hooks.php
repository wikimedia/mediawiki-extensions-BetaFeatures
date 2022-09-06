<?php
/*
 * This file is part of the MediaWiki extension BetaFeatures.
 *
 * BetaFeatures is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * BetaFeatures is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with BetaFeatures.  If not, see <http://www.gnu.org/licenses/>.
 *
 * BetaFeatures extension hooks
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

namespace MediaWiki\Extension\BetaFeatures;

use DatabaseUpdater;
use DeferredUpdates;
use Exception;
use Hooks as MWHooks;
use MediaWiki\Hook\ExtensionTypesHook;
use MediaWiki\Hook\MakeGlobalVariablesScriptHook;
use MediaWiki\Hook\SkinTemplateNavigation__UniversalHook;
use MediaWiki\Installer\Hook\LoadExtensionSchemaUpdatesHook;
use MediaWiki\MediaWikiServices;
use MediaWiki\Preferences\Hook\GetPreferencesHook;
use MediaWiki\User\Hook\UserGetDefaultOptionsHook;
use MediaWiki\User\Options\Hook\SaveUserOptionsHook;
use MediaWiki\User\UserIdentity;
use ObjectCache;
use OutputPage;
use RequestContext;
use SkinTemplate;
use SpecialPage;
use User;

class Hooks implements
	ExtensionTypesHook,
	GetPreferencesHook,
	LoadExtensionSchemaUpdatesHook,
	MakeGlobalVariablesScriptHook,
	SaveUserOptionsHook,
	SkinTemplateNavigation__UniversalHook,
	UserGetDefaultOptionsHook
{

	/**
	 * @var array An array of each of the available Beta Features, with their requirements, if any.
	 * It is passed client-side for JavaScript rendering/responsiveness.
	 */
	private static $features = [];

	/**
	 * @param string[] $prefs
	 * @return int[]
	 */
	public static function getUserCounts( array $prefs ) {
		$counts = [];
		if ( !$prefs ) {
			return $counts;
		}

		$dbr = wfGetDB( DB_REPLICA );
		$res = $dbr->select(
			'betafeatures_user_counts',
			[ 'feature', 'number' ],
			[ 'feature' => $prefs ],
			__METHOD__
		);

		foreach ( $res as $row ) {
			$counts[$row->feature] = $row->number;
		}

		return $counts;
	}

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/SaveUserOptions
	 *
	 * @param UserIdentity $user User who's just saved their preferences
	 * @param array &$modifiedOptions List of modified options
	 * @param array $originalOptions List of original user options
	 * @throws Exception
	 */
	public function onSaveUserOptions(
		UserIdentity $user,
		array &$modifiedOptions,
		array $originalOptions
	) {
		if ( !$user->isRegistered() ) {
			// Anonymous users do not have options, shorten out.
			return;
		}

		$services = MediaWikiServices::getInstance();
		$betaFeatures = $services->getMainConfig()->get( 'BetaFeatures' );
		$user = $services->getUserFactory()->newFromUserIdentity( $user );
		MWHooks::run( 'GetBetaFeaturePreferences', [ $user, &$betaFeatures ] );

		$jobs = [];
		foreach ( $betaFeatures as $name => $option ) {
			if ( !array_key_exists( $name, $modifiedOptions ) ) {
				continue;
			}
			$newVal = $modifiedOptions[$name];
			$oldVal = $originalOptions[$name] ?? null;
			// Check if this preference meaningfully changed
			if ( $oldVal == $newVal ) {
				// unchanged
				continue;
			}
			// Enqueue a job to update the count for this preference
			$jobs[] = new UpdateBetaFeatureUserCountsJob(
				[ 'prefs' => [ $name ] ]
			);
		}
		if ( $jobs !== [] ) {
			$services->getJobQueueGroupFactory()->makeJobQueueGroup()->push( $jobs );
		}
	}

	/**
	 * @param User $user
	 * @param array[] &$prefs
	 * @throws BetaFeaturesMissingFieldException
	 */
	public function onGetPreferences( $user, &$prefs ) {
		$services = MediaWikiServices::getInstance();
		$mainConfig = $services->getMainConfig();

		$betaPrefs = $mainConfig->get( 'BetaFeatures' );
		$depHooks = [];

		MWHooks::run( 'GetBetaFeaturePreferences', [ $user, &$betaPrefs ] );

		$count = count( $betaPrefs );
		$prefs['betafeatures-section-desc'] = [
			'type' => 'info',
			'default' => static function () use ( $count ) {
				return wfMessage( 'betafeatures-section-desc' )
					->numParams( $count )
					->parseAsBlock();
			},
			'section' => 'betafeatures',
			'raw' => true,
		];

		$prefs['betafeatures-auto-enroll'] = [
			'type' => 'check',
			'label-message' => 'betafeatures-auto-enroll',
			'help-message' => 'betafeatures-auto-enroll-help',
			'section' => 'betafeatures',
		];

		// Purely visual field.
		$prefs['betafeatures-breaking-hr'] = [
			'class' => HTMLHorizontalRuleField::class,
			'section' => 'betafeatures',
		];

		$counts = self::getUserCounts( array_keys( $betaPrefs ) );

		// Set up dependency hooks array
		// This complex structure brought to you by Per-Wiki Configuration,
		// coming soon to a wiki very near you.
		MWHooks::run( 'GetBetaFeatureDependencyHooks', [ &$depHooks ] );

		$userOptionsManager = $services->getUserOptionsManager();
		$autoEnrollSaveSettings = [];
		$autoEnrollAll = $userOptionsManager->getBoolOption( $user, 'betafeatures-auto-enroll' );

		$autoEnroll = [];

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $info['auto-enrollment'] ) ) {
				$autoEnroll[$info['auto-enrollment']] = $key;
			}
		}

		$hiddenPrefs = $mainConfig->get( 'HiddenPrefs' );
		$allowlist = $mainConfig->get( 'BetaFeaturesWhitelist' );
		foreach ( $betaPrefs as $key => $info ) {
			// Check if feature should be skipped
			if (
				// Check if feature is hidden
				in_array( $key, $hiddenPrefs ) ||
				// Check if feature is whitelisted
				( is_array( $allowlist ) && !in_array( $key, $allowlist ) ) ||
				// Check if dependencies are set but not met
				(
					isset( $info['dependent'] ) &&
					$info['dependent'] === true &&
					isset( $depHooks[$key] ) &&
					!MWHooks::run( $depHooks[$key] )
				)
			) {
				continue;
			}

			$opt = [
				'class' => HTMLFeatureField::class,
				'section' => 'betafeatures',
				'disable-if' => [ '===', 'betafeatures-auto-enroll', '1' ],
			];

			$requiredFields = [
				'label-message' => true,
				'desc-message' => true,
				'screenshot' => false,
				'requirements' => false,
				'info-link' => false,
				'info-message' => false,
				'discussion-link' => false,
				'discussion-message' => false,
				'disabled' => false,
			];

			foreach ( $requiredFields as $field => $required ) {
				if ( isset( $info[$field] ) ) {
					$opt[$field] = $info[$field];
				} elseif ( $required ) {
					// A required field isn't present in the info array
					// we got from the GetBetaFeaturePreferences hook.
					// Don't add this feature to the form.
					throw new BetaFeaturesMissingFieldException(
						"The field {$field} was missing from the beta feature {$key}."
					);
				}
			}

			if ( isset( $counts[$key] ) ) {
				$opt['user-count'] = $counts[$key];
			}

			// Set the beta feature in the standard preferences array
			// Just before, unset the key to resort it in the array, in the case the key was already set
			unset( $prefs[$key] );
			$prefs[$key] = $opt;

			$autoEnrollForThisPref = false;

			if ( isset( $info['group'] ) && isset( $autoEnroll[$info['group']] ) ) {
				$autoEnrollForThisPref = $userOptionsManager
					->getBoolOption( $user, $autoEnroll[$info['group']] );
			}

			$exemptAutoEnroll = ( $info['exempt-from-auto-enrollment'] ?? false )
				|| ( $info['disabled'] ?? false );
			$autoEnrollHere = !$exemptAutoEnroll && ( $autoEnrollAll || $autoEnrollForThisPref );

			// Use raw value for existence test
			$currentValue = $userOptionsManager->getOption( $user, $key );

			// Keep it break now... The tests applied are against the comments below.
			// Fixing all the tests is not worthwhile, the auto-enroll logic should be refactored later.
			if ( $autoEnrollHere && $currentValue !== '1' ) {
				// We haven't seen this before, and the user has auto-enroll enabled!
				// Set the option to true and make it visible for the current user object
				$userOptionsManager->setOption( $user, $key, true );
				// Also put it aside for saving the settings later
				$autoEnrollSaveSettings[$key] = true;
			}

			self::$features[$key] = [];
			self::$features[$key]['__skip-auto-enroll'] = $exemptAutoEnroll;
		}

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $prefs[$key]['requirements'] ) ) {
				// Check which other beta features are required, and fetch their labels
				if ( isset( $prefs[$key]['requirements']['betafeatures'] ) ) {
					$requiredPrefs = [];
					foreach ( $prefs[$key]['requirements']['betafeatures'] as $preference ) {
						if ( !$userOptionsManager->getBoolOption( $user, $preference ) ) {
							$requiredPrefs[] = $prefs[$preference]['label-message'];
						}
					}
					if ( count( $requiredPrefs ) ) {
						$prefs[$key]['requirements']['betafeatures-messages'] = $requiredPrefs;
					}
				}

				// Test skin support
				if ( isset( $prefs[$key]['requirements']['skins'] ) ) {
					$skinFactory = $services->getSkinFactory();
					// Remove any skins that aren't installed or users can't choose
					$prefs[$key]['requirements']['skins'] = array_intersect(
						/** @phan-suppress-next-line PhanTypeInvalidDimOffset,PhanTypeMismatchArgumentInternal */
						$prefs[$key]['requirements']['skins'],
						array_keys( $skinFactory->getAllowedSkins() )
					);

					if ( empty( $prefs[$key]['requirements']['skins'] ) ) {
						// If there are no valid skins, don't show the preference
						wfDebugLog( 'BetaFeatures', "The $key BetaFeature has no valid skins installed." );
						continue;
					}
					// Also check if the user's current skin is supported
					$prefs[$key]['requirements']['skin-not-supported'] = !in_array(
						RequestContext::getMain()->getSkin()->getSkinName(),
						$prefs[$key]['requirements']['skins']
					);
				}
			}

			// If a unsupported browsers list is supplied, store so it can be passed as JSON
			self::$features[$key]['unsupportedList'] = $prefs[$key]['requirements']['unsupportedList'] ??
				// @deprecated since 1.35, use unsupportedList instead of blacklist
				( $prefs[$key]['requirements']['blacklist'] ?? null );
		}

		if ( $autoEnrollSaveSettings !== [] ) {
			// Save the preferences to the DB post-send
			DeferredUpdates::addCallableUpdate(
				static function () use ( $user, $autoEnrollSaveSettings, $userOptionsManager ) {
					$cache = ObjectCache::getLocalClusterInstance();
					$key = $cache->makeKey( __CLASS__, 'prefs-update', $user->getId() );
					// T95839: If concurrent requests pile on (e.g. multiple tabs), only let one
					// thread bother doing these updates. This avoids pointless error log spam.
					if ( $cache->lock( $key, 0, $cache::TTL_MINUTE ) ) {
						// Refresh, because the settings could be changed in the meantime by api or special page
						$userLatest = $user->getInstanceForUpdate();
						// Apply the settings and save
						foreach ( $autoEnrollSaveSettings as $key => $option ) {
							$userOptionsManager->setOption( $userLatest, $key, $option );
						}
						$userOptionsManager->saveOptions( $userLatest );
						$cache->unlock( $key );
					}
				}
			);
		}
	}

	/**
	 * Add default preferences values
	 *
	 * @param array &$defaultOptions Array of preference keys and their default values.
	 */
	public function onUserGetDefaultOptions( &$defaultOptions ) {
		$betaPrefs = MediaWikiServices::getInstance()->getMainConfig()->get( 'BetaFeatures' );

		foreach ( $betaPrefs as $key => $_ ) {
			$defaultOptions[$key] = false;
		}
	}

	/**
	 * @param array &$vars
	 * @param OutputPage $out
	 */
	public function onMakeGlobalVariablesScript( &$vars, $out ): void {
		if ( self::$features ) {
			// This is added to page view HTML on all articles.
			// FIXME: Move this to the preferences page somehow, or
			// bundle with the module that loads betafeatures.js.
			$vars['wgBetaFeaturesFeatures'] = self::$features;
		}
	}

	/**
	 * @param SkinTemplate $skintemplate
	 * @param array[] &$links
	 * @phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName
	 */
	public function onSkinTemplateNavigation__Universal(
		$skintemplate,
		&$links
	): void {
		// phpcs:enable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName
		// using // phpcs:ignore after docblock doesn't work, it shows
		// MediaWiki.Commenting.FunctionComment.MissingDocumentationPublic
		$personal_urls = $links['user-menu'] ?? [];
		$user = $skintemplate->getUser();
		if ( $user->isRegistered() ) {
			$personal_urls = wfArrayInsertAfter( $personal_urls, [
				'betafeatures' => [
					'text' => wfMessage( 'betafeatures-toplink' )->text(),
					'href' => SpecialPage::getTitleFor(
						'Preferences', false, 'mw-prefsection-betafeatures'
					)->getLinkURL(),
					'active' => $skintemplate->getTitle()->isSpecial( 'Preferences' ),
					'icon' => 'labFlask'
				],
			], 'preferences' );
		}
		$links['user-menu'] = $personal_urls;
	}

	/**
	 * @param DatabaseUpdater $updater
	 */
	public function onLoadExtensionSchemaUpdates( $updater ) {
		$dbType = $updater->getDB()->getType();

		if ( $dbType === 'mysql' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/tables-generated.sql'
			);
		} elseif ( $dbType === 'sqlite' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/sqlite/tables-generated.sql'
			);
		} elseif ( $dbType === 'postgres' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/postgres/tables-generated.sql'
			);
		}
	}

	/**
	 * @param string[] &$extTypes
	 */
	public function onExtensionTypes( &$extTypes ) {
		$extTypes['betafeatures'] = wfMessage( 'betafeatures-extension-type' )->text();
	}

}
