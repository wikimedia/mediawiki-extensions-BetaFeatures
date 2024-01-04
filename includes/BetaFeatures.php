<?php
/**
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
 * BetaFeatures utilities
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

namespace MediaWiki\Extension\BetaFeatures;

use MediaWiki\MediaWikiServices;
use MediaWiki\User\Options\StaticUserOptionsLookup;
use MediaWiki\User\UserIdentity;

class BetaFeatures {

	/**
	 * Check if a user has a beta feature enabled.
	 *
	 * @param UserIdentity $user The user identity to check
	 * @param string $feature The key passed back to BetaFeatures
	 *     from the GetBetaFeaturePreferences hook
	 * @param array|null $userOptions Specific state of user options,
	 *     can be used to handle SaveUserOptions hook.
	 * @return bool
	 */
	public static function isFeatureEnabled( UserIdentity $user, $feature, $userOptions = null ) {
		$services = MediaWikiServices::getInstance();
		$lookup = $services->getUserOptionsLookup();
		if ( is_array( $userOptions ) ) {
			$defaults = $lookup->getDefaultOptions( $user );
			$lookup = new StaticUserOptionsLookup( [ $user->getName() => $userOptions ], $defaults );
		}

		$config = $services->getMainConfig();
		$allowlist = $config->get( 'BetaFeaturesAllowList' );

		if ( is_array( $allowlist ) && !in_array( $feature, $allowlist ) ) {
			// If there is an allow-list, and the feature is not in said list,
			// it can't be enabled.
			return false;
		}
		return $lookup->getBoolOption( $user, $feature );
	}
}
