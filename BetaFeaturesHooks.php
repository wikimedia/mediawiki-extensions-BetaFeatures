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
 * @file
 * @ingroup extensions
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @copyright Copyright © 2013, Mark Holmquist
 */

class BetaFeaturesMissingFieldException extends Exception {
}

class BetaFeaturesHooks {

	// 30 minutes
	const COUNT_CACHE_TTL = 1800;

	/**
	 * @param array $prefs
	 * @return array|mixed
	 */
	static function getUserCounts( $prefs ) {
		global $wgMemc;
		$key = wfMemcKey( 'betafeatures', 'usercounts' );
		$counts = $wgMemc->get( $key );

		if ( $counts === false ) {
			$jqg = JobQueueGroup::singleton();

			// If we aren't waiting to update the counts, push a job to do it.
			// Only one job in this queue at a time.
			// Will only get added once every thirty minutes, when the
			// cache is invalidated.
			if ( $jqg->get( 'updateBetaFeaturesUserCounts' )->isEmpty() ) {
				$updateJob = new UpdateBetaFeatureUserCountsJob(
					Title::newMainPage(),
					array(
						'prefs' => $prefs,
					)
				);
				$jqg->push( $updateJob );
			}

			$counts = array();
			$dbr = wfGetDB( DB_SLAVE );
			$res = $dbr->select(
				'betafeatures_user_counts',
				array(
					'feature',
					'number',
				),
				array(),
				__METHOD__
			);

			foreach ( $res as $row ) {
				$counts[$row->feature] = $row->number;
			}

			// Cache for 30 minutes
			$wgMemc->set( $key, $counts, self::COUNT_CACHE_TTL );
		}

		return $counts;
	}

	/**
	 * @param User $user
	 * @param array $prefs
	 * @return bool
	 * @throws BetaFeaturesMissingFieldException
	 */
	static function getPreferences( $user, &$prefs ) {
		$betaPrefs = array();

		wfRunHooks( 'GetBetaFeaturePreferences', array( $user, &$betaPrefs ) );

		$counts = self::getUserCounts( array_keys( $betaPrefs ) );

		foreach ( $betaPrefs as $key => $info ) {
			$opt = array(
				'class' => 'HTMLFeatureField',
				'section' => 'betafeatures',
			);

			$requiredFields = array(
				'label-message' => true,
				'desc-message' => true,
				// The next two could probably not be required at a
				// later date, but currently they're required for the
				// design to work.
				'info-link' => true,
				'discussion-link' => true,
				'screenshot' => false,
			);

			foreach ( $requiredFields as $field => $required ) {
				if ( isset( $info[$field] ) ) {
					$opt[$field] = $info[$field];
				} elseif ( $required ) {
					// A required field isn't present in the info array
					// we got from the GetBetaFeaturePreferences hook.
					// Don't add this feature to the form.
					throw new BetaFeaturesMissingFieldException( "The field {$field} was missing from the beta feature {$key}." );
				}
			}

			if ( isset( $counts[$key] ) ) {
				$opt['user-count'] = $counts[$key];
			}

			$prefs[$key] = $opt;

			$currentValue = $user->getOption( $key );
			if ( $currentValue !== HTMLFeatureField::OPTION_ENABLED &&
					$currentValue !== HTMLFeatureField::OPTION_DISABLED &&
					$user->getOption( 'beta-feature-auto-enroll' ) === HTMLFeatureField::OPTION_ENABLED ) {
				// We haven't seen this before, and the user has auto-enroll enabled!
				// Set the option to true.
				$user->setOption( $key, HTMLFeatureField::OPTION_ENABLED );
			}
		}

		return true;
	}

	/**
	 * @param User $user
	 * @param array $prefs
	 */
	static function getAutoEnrollPreference( $user, &$prefs ) {
		global $wgExtensionAssetsPath;

		$prefs['beta-feature-auto-enroll'] = array(
			'label-message' => 'betafeatures-auto-enroll',
			'desc-message' => 'betafeatures-auto-enroll-desc',
			'info-link' => 'https://mediawiki.org/wiki/Extension:BetaFeatures/Auto-enrollment',
			'discussion-link' => 'https://mediawiki.org/wiki/Extension_talk:BetaFeatures/Auto-enrollment',
			'screenshot' => $wgExtensionAssetsPath . '/BetaFeatures/images/all-beta.png',
		);
	}

	/**
	 * @param array $personal_urls
	 * @param Title $title
	 * @return bool
	 */
	static function getBetaFeaturesLink( &$personal_urls, $title ) {
		global $wgUser;

		if ( $wgUser->isLoggedIn() ) {
			$bfurl = array(
				'text' => wfMessage( 'betafeatures-toplink' )->text(),
				'href' => Title::makeTitle( NS_SPECIAL, 'Preferences', 'mw-prefsection-betafeatures' )->getLinkURL(),
				'active' => $title->isSpecial( 'Preferences' ),
			);

			$personal_urls['betafeatures'] = $bfurl;
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
}
