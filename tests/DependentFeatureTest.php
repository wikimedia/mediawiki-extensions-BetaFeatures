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
 * Dependent feature tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class DependentFeatureTest extends BetaFeaturesTestCase {

	// Key for testing preference
	const testPrefKey = 'unittest';

	// Key for dependency hook
	const testDepsKey = 'DependentFeatureTestDependencyCheck';

	// Structure of testing preference
	static $testPref = array(
		'label-message' => 'nullish',
		'desc-message' => 'nullish',
		'info-link' => 'http://example.org/features',
		'discussion-link' => 'http://example.org/feedback',
		'dependent' => true,
	);

	static function failHook() {
		return false;
	}

	static function passHook() {
		return true;
	}

	static function hookThatRegistersPreference( $user, &$betaPrefs ) {
		$betaPrefs[self::testPrefKey] = self::$testPref;
		return true;
	}

	static function hookThatRegistersDependency( &$depHooks ) {
		$depHooks[self::testPrefKey] = self::testDepsKey;
		return true;
	}

	protected function setUp() {
		global $wgHooks;

		parent::setUp();

		$wgHooks[self::testDepsKey] = array();
		$wgHooks['GetBetaFeaturePreferences'][] = 'DependentFeatureTest::hookThatRegistersPreference';
		$wgHooks['GetBetaFeatureDependencyHooks'][] = 'DependentFeatureTest::hookThatRegistersDependency';

	}

	public function testPassingDependency() {
		global $wgHooks;

		$wgHooks[self::testDepsKey][] = 'DependentFeatureTest::passHook';

		$prefs = array();

		Hooks::run( 'GetPreferences', array( $this->user, &$prefs ) );

		$this->assertArrayHasKey( self::testPrefKey, $prefs, 'Hook did not run with passing dependency.' );
	}

	public function testFailingDependency() {
		global $wgHooks;

		$wgHooks[self::testDepsKey][] = 'DependentFeatureTest::failHook';

		$prefs = array();

		Hooks::run( 'GetPreferences', array( $this->user, &$prefs ) );

		$this->assertArrayNotHasKey( self::testPrefKey, $prefs, 'Hook ran with failing dependency.' );
	}

	public function testNoDependency() {
		$prefs = array();

		Hooks::run( 'GetPreferences', array( $this->user, &$prefs ) );

		$this->assertArrayHasKey( self::testPrefKey, $prefs, 'Hook did not run without dependency.' );
	}
}
