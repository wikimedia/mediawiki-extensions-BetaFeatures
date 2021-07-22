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
 * Test case common to BetaFeatures tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2014 Antoine Musso and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

/**
 * @group BetaFeatures
 */
class BetaFeaturesTestCase extends MediaWikiTestCase {

	/**
	 * @var User
	 */
	protected $user;

	protected function setUp(): void {
		global $wgHooks;

		parent::setUp();

		// Avoid interactions with other extensions
		$newHooks = $wgHooks;
		$newHooks['GetPreferences'] = [ 'MediaWiki\\Extension\\BetaFeatures\\Hooks::getPreferences' ];
		$this->setMwGlobals( [ 'wgHooks' => $newHooks ] );

		$this->user = $this->getMutableTestUser( [ 'unittesters' ] )->getUser();
	}
}
