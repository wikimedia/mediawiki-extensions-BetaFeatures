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

class BetaFeaturesHooks {

	static function getPreferences( $user, &$prefs ) {
		global $wgExtensionAssetsPath;

		$betaPrefs = array();

		wfRunHooks( 'GetBetaFeaturePreferences', array( $user, &$betaPrefs ) );

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

			$complete = true;

			foreach ( $requiredFields as $field => $required ) {
				if ( array_key_exists( $field, $info ) ) {
					$opt[$field] = $info[$field];
				} elseif ( $required ) {
					// A required field isn't present in the info array
					// we got from the GetBetaFeaturePreferences hook.
					// Don't add this feature to the form.
					$complete = false;
					throw new Exception( "The field {$field} was missing from the beta feature {$key}." );
				}
			}

			if ( $complete ) {
				$prefname = 'beta-feature-' . $key;

				$prefs[$prefname] = $opt;

				$currentValue = $user->getOption( $prefname );
				if ( $currentValue !== HTMLFeatureField::OPTION_ENABLED &&
						$currentValue !== HTMLFeatureField::OPTION_DISABLED &&
						$user->getOption( 'beta-feature-auto-enroll' ) === HTMLFeatureField::OPTION_ENABLED ) {
					// We haven't seen this before, and the user has auto-enroll enabled!
					// Set the option to true.
					$user->setOption( $prefname, HTMLFeatureField::OPTION_ENABLED );
				}
			}
		}

		return true;
	}

	static function getAutoEnrollPreference( $user, &$prefs ) {
		global $wgExtensionAssetsPath;

		$prefs['auto-enroll'] = array(
			'label-message' => 'betafeatures-auto-enroll',
			'desc-message' => 'betafeatures-auto-enroll-desc',
			'info-link' => 'https://mediawiki.org/wiki/Extension:BetaFeatures/Auto-enrollment',
			'discussion-link' => 'https://mediawiki.org/wiki/Extension_talk:BetaFeatures/Auto-enrollment',
			'screenshot' => $wgExtensionAssetsPath . '/BetaFeatures/images/all-beta.png',
		);
	}

	static function getBetaFeaturesLink( &$personal_urls, $title ) {
		global $wgUser;

		if ( $wgUser->isLoggedIn() ) {
			$skin = $wgUser->getSkin();
			$bfurl = array(
				'text' => wfMessage( 'betafeatures-toplink' )->text(),
				'href' => $skin->makeSpecialUrl( 'Preferences' ) . '#mw-prefsection-betafeatures',
				'active' => $title->isSpecial( 'Preferences' ),
			);

			$personal_urls['betafeatures'] = $bfurl;
		}

		return true;
	}
}
