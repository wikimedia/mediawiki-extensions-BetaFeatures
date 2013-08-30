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
		$betaPrefs = array();

		wfRunHooks( 'GetBetaFeaturePreferences', array( $user, &$betaPrefs ) );

		foreach ( $betaPrefs as $key => $info ) {
			$opt = array(
				'type' => 'hidden',
			);

			if ( array_key_exists( 'label-message', $info ) ) {
				$opt['label-message'] = $info['label-message'];
			}

			// We now have a concept of required fields, but we don't
			// actually require any. (removed version)
			$requiredFields = array(
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
					break;
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
}
