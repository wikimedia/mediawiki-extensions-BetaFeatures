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

/**
 * @covers \MediaWiki\Extension\BetaFeatures\Hooks::getPreferences
 *
 * @group BetaFeatures
 */
class DependentFeatureTest extends BetaFeaturesTestCase {

	/** Key for testing preference */
	private const TESTPREFKEY = 'unittest';

	/** Key for dependency hook */
	private const TESTDEPSKEY = 'DependentFeatureTestDependencyCheck';

	/** @var array Structure of testing preference */
	public static $testPref = [
		'label-message' => 'nullish',
		'desc-message' => 'nullish',
		'info-link' => 'http://example.org/features',
		'discussion-link' => 'http://example.org/feedback',
		'dependent' => true,
	];

	/**
	 * Hook callback
	 * @return bool
	 */
	public static function failHook() {
		return false;
	}

	/**
	 * Hook callback
	 * @return bool
	 */
	public static function passHook() {
		return true;
	}

	/**
	 * Hook callback
	 * @param User $user
	 * @param array &$betaPrefs
	 * @return bool
	 */
	public static function hookThatRegistersPreference( User $user, array &$betaPrefs ) {
		$betaPrefs[self::TESTPREFKEY] = self::$testPref;
		return true;
	}

	/**
	 * Hook callback
	 * @param array &$depHooks
	 * @return bool
	 */
	public static function hookThatRegistersDependency( array &$depHooks ) {
		$depHooks[self::TESTPREFKEY] = self::TESTDEPSKEY;
		return true;
	}

	protected function setUp(): void {
		global $wgHooks;

		parent::setUp();

		$wgHooks[self::TESTDEPSKEY] = [];
		$wgHooks['GetBetaFeaturePreferences'][] =
			'DependentFeatureTest::hookThatRegistersPreference';
		$wgHooks['GetBetaFeatureDependencyHooks'][] =
			'DependentFeatureTest::hookThatRegistersDependency';
	}

	public function testPassingDependency() {
		global $wgHooks;

		$wgHooks[self::TESTDEPSKEY][] = 'DependentFeatureTest::passHook';

		$prefs = [];

		Hooks::run( 'GetPreferences', [ $this->user, &$prefs ] );

		$this->assertArrayHasKey(
			self::TESTPREFKEY, $prefs, 'Hook did not run with passing dependency.'
		);
	}

	public function testFailingDependency() {
		global $wgHooks;

		$wgHooks[self::TESTDEPSKEY][] = 'DependentFeatureTest::failHook';

		$prefs = [];

		Hooks::run( 'GetPreferences', [ $this->user, &$prefs ] );

		$this->assertArrayNotHasKey(
			self::TESTPREFKEY, $prefs, 'Hook ran with failing dependency.'
		);
	}

	public function testNoDependency() {
		$prefs = [];

		Hooks::run( 'GetPreferences', [ $this->user, &$prefs ] );

		$this->assertArrayHasKey(
			self::TESTPREFKEY, $prefs, 'Hook did not run without dependency.'
		);
	}
}
