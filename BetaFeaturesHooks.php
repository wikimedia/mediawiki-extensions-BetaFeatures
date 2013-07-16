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

			$prefs['beta-feature-' . $key] = $opt;
		}

		return true;
	}
}
