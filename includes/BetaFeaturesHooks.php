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

class BetaFeaturesHooks {

	/**
	 * An array of each of the available Beta Features, with their requirements, if any.
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
	 * @param User $user User who's just saved their preferences
	 * @param array &$options List of options
	 */
	public static function updateUserCounts( User $user, array &$options ) {
		global $wgBetaFeatures;

		// Let's find out what's changed
		$oldUser = User::newFromName( $user->getName() );

		if ( !$oldUser ) {
			// Anonymous users do not have options, shorten out.
			return;
		}

		$betaFeatures = $wgBetaFeatures;
		Hooks::run( 'GetBetaFeaturePreferences', [ $user, &$betaFeatures ] );

		foreach ( $betaFeatures as $name => $option ) {
			$newVal = $user->getOption( $name );
			$oldVal = $oldUser->getOption( $name );
			// Check if this preference meaningfully changed
			if ( $oldVal === $newVal ||
				( $oldVal === null && $newVal === HTMLFeatureField::OPTION_DISABLED )
			) {
				// unchanged
				continue;
			}
			// Enqueue a job to update the count for this preference
			JobQueueGroup::singleton()->push(
				new UpdateBetaFeatureUserCountsJob(
					Title::newMainPage(),
					[ 'prefs' => [ $name ] ]
				)
			);
		}
	}

	/**
	 * @param User $user
	 * @param array[] &$prefs
	 * @throws BetaFeaturesMissingFieldException
	 */
	public static function getPreferences( User $user, array &$prefs ) {
		global $wgBetaFeaturesWhitelist, $wgBetaFeatures;

		$betaPrefs = $wgBetaFeatures;
		$depHooks = [];

		Hooks::run( 'GetBetaFeaturePreferences', [ $user, &$betaPrefs ] );

		$prefs['betafeatures-section-desc'] = [
			'type' => 'info',
			'default' =>
				wfMessage( 'betafeatures-section-desc' )->numParams( count( $betaPrefs ) )->parseAsBlock(),
			'section' => 'betafeatures',
			'raw' => true,
		];

		$prefs['betafeatures-auto-enroll'] = [
			'class' => NewHTMLCheckField::class,
			'label-message' => 'betafeatures-auto-enroll',
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
		Hooks::run( 'GetBetaFeatureDependencyHooks', [ &$depHooks ] );

		$autoEnrollSaveSettings = [];
		$autoEnrollAll =
			$user->getOption( 'betafeatures-auto-enroll' ) === HTMLFeatureField::OPTION_ENABLED;
		$autoEnroll = [];

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $info['auto-enrollment'] ) ) {
				$autoEnroll[$info['auto-enrollment']] = $key;
			}
		}

		foreach ( $betaPrefs as $key => $info ) {
			// Check if feature is whitelisted
			if (
				is_array( $wgBetaFeaturesWhitelist ) &&
				!in_array( $key, $wgBetaFeaturesWhitelist )
			) {
				// Skip this preference!
				continue;
			}

			// Check if dependencies are set but not met
			if (
				isset( $info['dependent'] ) &&
				$info['dependent'] === true &&
				isset( $depHooks[$key] ) &&
				!Hooks::run( $depHooks[$key] )
			) {
				// Skip this preference!
				continue;
			}

			$opt = [
				'class' => HTMLFeatureField::class,
				'section' => 'betafeatures',
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

			$currentValue = $user->getOption( $key );

			$autoEnrollForThisPref = false;

			if ( isset( $info['group'] ) && isset( $autoEnroll[$info['group']] ) ) {
				$autoEnrollForThisPref =
					 $user->getOption( $autoEnroll[$info['group']] ) === HTMLFeatureField::OPTION_ENABLED;
			}

			$exemptAutoEnroll = isset( $info['exempt-from-auto-enrollment'] )
				&& $info['exempt-from-auto-enrollment'] === true;
			$autoEnrollHere = !$exemptAutoEnroll
				&& ( $autoEnrollAll === true || $autoEnrollForThisPref === true );

			if ( $currentValue !== HTMLFeatureField::OPTION_ENABLED &&
					$currentValue !== HTMLFeatureField::OPTION_DISABLED &&
					$autoEnrollHere === true ) {
				// We haven't seen this before, and the user has auto-enroll enabled!
				// Set the option to true and make it visible for the current user object
				$user->setOption( $key, HTMLFeatureField::OPTION_ENABLED );
				// Also put it aside for saving the settings later
				$autoEnrollSaveSettings[$key] = HTMLFeatureField::OPTION_ENABLED;
			}

			self::$features[$key] = [];
		}

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $prefs[$key]['requirements'] ) ) {
				// Check which other beta features are required, and fetch their labels
				if ( isset( $prefs[$key]['requirements']['betafeatures'] ) ) {
					$requiredPrefs = [];
					foreach ( $prefs[$key]['requirements']['betafeatures'] as $preference ) {
						if ( !$user->getOption( $preference ) ) {
							$requiredPrefs[] = $prefs[$preference]['label-message'];
						}
					}
					if ( count( $requiredPrefs ) ) {
						$prefs[$key]['requirements']['betafeatures-messages'] = $requiredPrefs;
					}
				}

				// Test skin support
				if ( isset( $prefs[$key]['requirements']['skins'] ) ) {
					// Remove any skins that aren't installed or users can't choose
					$prefs[$key]['requirements']['skins'] = array_intersect(
						/** @phan-suppress-next-line PhanTypeInvalidDimOffset,PhanTypeMismatchArgumentInternal */
						$prefs[$key]['requirements']['skins'],
						array_keys( Skin::getAllowedSkins() )
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

			// If a browser blacklist is supplied, store so it can be passed as JSON
			self::$features[$key]['blacklist'] = $prefs[$key]['requirements']['blacklist'] ?? null;
		}

		if ( $autoEnrollSaveSettings !== [] ) {
			// Save the preferences to the DB post-send
			DeferredUpdates::addCallableUpdate(
				function () use ( $user, $autoEnrollSaveSettings ) {
					$cache = ObjectCache::getLocalClusterInstance();
					$key = $cache->makeKey( __CLASS__, 'prefs-update', $user->getId() );
					// T95839: If concurrent requests pile on (e.g. multiple tabs), only let one
					// thread bother doing these updates. This avoids pointless error log spam.
					if ( $cache->lock( $key, 0, $cache::TTL_MINUTE ) ) {
						// Refresh, because the settings could be changed in the meantime by api or special page
						$userLatest = $user->getInstanceForUpdate();
						// Apply the settings and save
						foreach ( $autoEnrollSaveSettings as $key => $option ) {
							$userLatest->setOption( $key, $option );
						}
						$userLatest->saveSettings();
						$cache->unlock( $key );
					}
				}
			);
		}
	}

	public static function onMakeGlobalVariablesScript( array &$vars ) {
		if ( self::$features ) {
			// This is added to page view HTML on all articles.
			// FIXME: Move this to the preferences page somehow, or
			// bundle with the module that loads betafeatures.js.
			$vars['wgBetaFeaturesFeatures'] = self::$features;
		}
	}

	/**
	 * @param array[] &$personal_urls
	 * @param Title $title
	 * @param SkinTemplate $skintemplate
	 */
	public static function getBetaFeaturesLink(
		array &$personal_urls,
		Title $title,
		SkinTemplate $skintemplate
	) {
		$user = $skintemplate->getUser();
		if ( $user->isLoggedIn() ) {
			$personal_urls = wfArrayInsertAfter( $personal_urls, [
				'betafeatures' => [
					'text' => wfMessage( 'betafeatures-toplink' )->text(),
					'href' => SpecialPage::getTitleFor(
						'Preferences', false, 'mw-prefsection-betafeatures'
					)->getLinkURL(),
					'active' => $title->isSpecial( 'Preferences' ),
				],
			], 'preferences' );
		}
	}

	/**
	 * @param DatabaseUpdater $updater
	 */
	public static function getSchemaUpdates( DatabaseUpdater $updater ) {
		$updater->addExtensionTable( 'betafeatures_user_counts',
			__DIR__ . '/../sql/create_counts.sql' );
	}

	/**
	 * @param string[] &$extTypes
	 */
	public static function onExtensionTypes( array &$extTypes ) {
		$extTypes['betafeatures'] = wfMessage( 'betafeatures-extension-type' )->escaped();
	}

}
