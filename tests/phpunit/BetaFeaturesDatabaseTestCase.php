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
 * Test case common to BetaFeatures tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2014 Antoine Musso and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

use MediaWiki\Extension\BetaFeatures\Hooks as BFHooks;

/**
 * Base class for BetaFeatures test that need the database.
 */
class BetaFeaturesDatabaseTestCase extends MediaWikiIntegrationTestCase {

	/**
	 * @var User
	 */
	protected $user;

	protected function setUp(): void {
		parent::setUp();

		// Avoid interactions with other extensions
		$this->setTemporaryHook(
			'GetPreferences',
			[ new BFHooks(), 'onGetPreferences' ]
		);

		$this->user = $this->getMutableTestUser( [ 'unittesters' ] )->getUser();
	}
}
