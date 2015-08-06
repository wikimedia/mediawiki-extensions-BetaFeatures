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

class BetaFeaturesMissingFieldException extends Exception {
}

class BetaFeaturesHooks {

	// 30 minutes
	const COUNT_CACHE_TTL = 1800;

	/**
	 * An array of each of the available Beta Features, with their requirements, if any.
	 *
	 * This also includes a magic value of 'blacklist', which consequently MUST NOT be
	 * used as the name of any registerd Beta Feature.
	 */
	private static $features = array();

	/**
	 * @param array $prefs
	 * @return array
	 */
	static function getUserCounts( array $prefs ) {
		$counts = array();
		if ( !$prefs ) {
			return $counts;
		}

		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select(
			'betafeatures_user_counts',
			array( 'feature', 'number' ),
			array( 'feature' => $prefs ),
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
	 * @return bool
	 */
	static function updateUserCounts( $user, &$options ) {
		global $wgBetaFeatures;

		// Let's find out what's changed
		$oldUser = User::newFromName( $user->getName() );
		$betaFeatures = $wgBetaFeatures;
		Hooks::run( 'GetBetaFeaturePreferences', array( $user, &$betaFeatures ) );

		foreach ( $betaFeatures as $name => $option ) {
			$newVal = $user->getOption( $name );
			$oldVal = $oldUser->getOption( $name );
			// Check if this preference meaningfully changed
			if ( $oldVal === $newVal ||
				( $oldVal === null && $newVal === HTMLFeatureField::OPTION_DISABLED )
			) {
				continue; // unchanged
			}
			// Enqueue a job to update the count for this preference
			JobQueueGroup::singleton()->push(
				new UpdateBetaFeatureUserCountsJob(
					Title::newMainPage(),
					array( 'prefs' => array( $name ) )
				)
			);
		}

		return true;
	}

	/**
	 * @param User $user
	 * @param array $prefs
	 * @return bool
	 * @throws BetaFeaturesMissingFieldException
	 */
	public static function getPreferences( User $user, array &$prefs ) {
		global $wgBetaFeaturesWhitelist, $wgBetaFeatures;

		$betaPrefs = $wgBetaFeatures;
		$depHooks = array();

		Hooks::run( 'GetBetaFeaturePreferences', array( $user, &$betaPrefs ) );

		$prefs['betafeatures-popup-disable'] = array(
			'type' => 'api',
			'default' => 0,
		);

		$prefs['betafeatures-section-desc'] = array(
			'class' => 'HTMLTextBlockField',
			'label' => wfMessage( 'betafeatures-section-desc' )->numParams( count( $betaPrefs ) )->parse(),
			'section' => 'betafeatures',
		);

		$prefs['betafeatures-auto-enroll'] = array(
			'class' => 'NewHTMLCheckField',
			'label-message' => 'betafeatures-auto-enroll',
			'section' => 'betafeatures',
		);

		// Purely visual field.
		$prefs['betafeatures-breaking-hr'] = array(
			'class' => 'HTMLHorizontalRuleField',
			'section' => 'betafeatures',
		);

		$counts = self::getUserCounts( array_keys( $betaPrefs ) );

		// Set up dependency hooks array
		// This complex structure brought to you by Per-Wiki Configuration,
		// coming soon to a wiki very near you.
		Hooks::run( 'GetBetaFeatureDependencyHooks', array( &$depHooks ) );

		$saveUser = false;
		$autoEnrollAll =
			$user->getOption( 'betafeatures-auto-enroll' ) === HTMLFeatureField::OPTION_ENABLED;
		$autoEnroll = array();

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $info['auto-enrollment'] ) ) {
				$autoEnroll[$info['auto-enrollment']] = $key;
			}
		}

		foreach ( $betaPrefs as $key => $info ) {
			if ( isset( $info['dependent'] ) && $info['dependent'] === true ) {
				$success = true;

				if (
						is_array( $wgBetaFeaturesWhitelist ) &&
						!in_array( $key, $wgBetaFeaturesWhitelist )
					) {
					$success = false;
				} elseif ( isset( $depHooks[$key] ) ) {
					$success = Hooks::run( $depHooks[$key] );
				}

				if ( $success !== true ) {
					// Skip this preference!
					continue;
				}
			}

			$opt = array(
				'class' => 'HTMLFeatureField',
				'section' => 'betafeatures',
			);

			$requiredFields = array(
				'label-message' => true,
				'desc-message' => true,
				'screenshot' => false,
				'requirements' => false,
				'info-link' => false,
				'info-message' => false,
				'discussion-link' => false,
				'discussion-message' => false,
			);

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

			$autoEnrollHere = $autoEnrollAll === true || $autoEnrollForThisPref === true;

			if ( $currentValue !== HTMLFeatureField::OPTION_ENABLED &&
					$currentValue !== HTMLFeatureField::OPTION_DISABLED &&
					$autoEnrollHere === true ) {
				// We haven't seen this before, and the user has auto-enroll enabled!
				// Set the option to true.
				$user->setOption( $key, HTMLFeatureField::OPTION_ENABLED );
				$saveUser = true;
			}
		}

		foreach ( $betaPrefs as $key => $info ) {
			$requirements = array();

			if ( isset( $prefs[$key]['requirements'] ) ) {

				// Check which other beta features are required, and fetch their labels
				if ( isset( $prefs[$key]['requirements']['betafeatures'] ) ) {
					$requiredPrefs = array();
					foreach ( $prefs[$key]['requirements']['betafeatures'] as $preference ) {
						if ( !$user->getOption( $preference ) ) {
							$requiredPrefs[] = $prefs[$preference]['label-message'];
						}
					}
					if ( count( $requiredPrefs ) ) {
						$prefs[$key]['requirements']['betafeatures-messages'] = $requiredPrefs;
					}
				}

				// If a browser blacklist is supplied, store so it can be passed as JSON
				if ( isset( $prefs[$key]['requirements']['blacklist'] ) ) {
					$requirements['blacklist'] = $prefs[$key]['requirements']['blacklist'];
				}

				// Test skin support
				if ( isset( $prefs[$key]['requirements']['skins'] ) ) {
					// Remove any skins that aren't installed or users can't choose
					$prefs[$key]['requirements']['skins'] = array_intersect(
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
			self::$features[$key] = $requirements;
		}

		if ( $saveUser ) {
			$user->saveSettings();
		}

		return true;
	}

	public static function onMakeGlobalVariablesScript( array &$vars ) {
		$vars['wgBetaFeaturesFeatures'] = self::$features;

		return true;
	}

	/**
	 * @param array $personal_urls
	 * @param Title $title
	 * @param SkinTemplate $skintemplate
	 * @return bool
	 */
	static function getBetaFeaturesLink( &$personal_urls, Title $title, SkinTemplate $skintemplate ) {
		$user = $skintemplate->getUser();
		if ( $user->isLoggedIn() ) {
			$personal_urls = wfArrayInsertAfter( $personal_urls, array(
				'betafeatures' => array(
					'text' => wfMessage( 'betafeatures-toplink' )->text(),
					'href' => SpecialPage::getTitleFor(
						'Preferences', false, 'mw-prefsection-betafeatures'
					)->getLinkURL(),
					'active' => $title->isSpecial( 'Preferences' ),
				),
			), 'preferences' );

			if ( !$user->getOption( 'betafeatures-popup-disable' ) ) {
				$skintemplate->getOutput()->addModules( 'ext.betaFeatures.popup' );
			}
		}

		return true;
	}

	/**
	 * @param array $files
	 * @return bool
	 */
	static function getUnitTestsList( &$files ) {
		$testDir = __DIR__ . '/tests';
		$files = array_merge( $files, glob( "$testDir/*Test.php" ) );
		return true;
	}

	/**
	 * @param DatabaseUpdater $updater
	 * @return bool
	 */
	static function getSchemaUpdates( $updater ) {
		$updater->addExtensionTable( 'betafeatures_user_counts',
			__DIR__ . '/sql/create_counts.sql' );
		return true;
	}

	public static function onExtensionTypes( array &$extTypes ) {
		$extTypes['betafeatures'] = wfMessage( 'betafeatures-extension-type' )->escaped();
		return true;
	}

}
