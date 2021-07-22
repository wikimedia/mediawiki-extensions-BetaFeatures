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
 * BetaFeatures hooks tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

/**
 * @covers \MediaWiki\Extension\BetaFeatures\Hooks::getPreferences
 *
 * @group BetaFeatures
 */
class HooksRunTest extends MediaWikiTestCase {

	/** Key for testing preference */
	private const TESTPREFKEY = 'unittest';

	/** @var array Structure of testing preference */
	public static $testPref = [
		'label-message' => 'nullish',
		'desc-message' => 'nullish',
		'info-link' => 'http://example.org/features',
		'discussion-link' => 'http://example.org/feedback',
	];

	/**
	 * @var User
	 */
	private $user;

	/**
	 * Hook callback
	 * @param User $user
	 * @param array &$betaPrefs
	 * @return true
	 */
	public static function nullHook( User $user, array &$betaPrefs ) {
		return true;
	}

	/**
	 * Hook callback
	 * @param User $user
	 * @param array &$betaPrefs
	 * @return true
	 */
	public static function hookThatRegistersPreference( User $user, array &$betaPrefs ) {
		$betaPrefs[self::TESTPREFKEY] = self::$testPref;
		return true;
	}

	protected function setUp(): void {
		parent::setUp();

		$this->user = $this->getMutableTestUser( [ 'unittesters' ] )->getUser();
	}

	public function testHooksRun() {
		global $wgHooks;

		$wgHooks['GetBetaFeaturePreferences'] = [ 'HooksRunTest::hookThatRegistersPreference' ];
		$prefs = [];
		Hooks::run( 'GetBetaFeaturePreferences', [ $this->user, &$prefs ] );
		$this->assertArrayHasKey( self::TESTPREFKEY, $prefs, 'Hook did not run' );
		$this->assertEquals(
			$prefs[self::TESTPREFKEY],
			self::$testPref,
			'The returned preference was not the same as what we registered.'
		);
	}
}
