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
 * Auto enrollment tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

use MediaWiki\Extension\BetaFeatures\HTMLFeatureField;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\Hooks::getPreferences
 *
 * @group BetaFeatures
 */
class AutoEnrollmentTest extends BetaFeaturesTestCase {

	/** @var array Structure of testing preference */
	public static $testPrefs = [
		'unittest-all' => [
			'label-message' => 'nullish',
			'desc-message' => 'nullish',
			'info-link' => 'http://example.org/features',
			'discussion-link' => 'http://example.org/feedback',
			'auto-enrollment' => 'unittest',
		],

		'unittest-ft1' => [
			'label-message' => 'something else',
			'desc-message' => 'something even differenter',
			'info-link' => 'http://example.org/feature/one',
			'discussion-link' => 'http://example.org/feedback/one',
			'group' => 'unittest',
			'auto-enrollment' => 'unittest2',
		],

		'unittest-ft2' => [
			'label-message' => 'something even more else',
			'desc-message' => 'something even more differenter',
			'info-link' => 'http://example.org/feature/two',
			'discussion-link' => 'http://example.org/feedback/two',
			'group' => 'unittest2',
		],

		'unittest-ft3' => [
			'label-message' => 'something entirely different',
			'desc-message' => 'something entirely differenter',
			'info-link' => 'http://example.org/feature/three',
			'discussion-link' => 'http://example.org/feedback/three',
			'group' => 'unittest2',
			'exempt-from-auto-enrollment' => true,
		],
	];

	/**
	 * Hook callback
	 * @param User $user
	 * @param array &$betaPrefs
	 * @return true
	 */
	public static function hookThatRegistersPreference( User $user, array &$betaPrefs ) {
		foreach ( self::$testPrefs as $key => $testPref ) {
			$betaPrefs[$key] = $testPref;
		}

		return true;
	}

	public static function provideTestData() {
		return [
			[
				null,
				null,
				'unittest-ft1',
				null,
				'Hooks set the preference though auto-enroll was not set.'
			],

			[
				'betafeatures-auto-enroll',
				HTMLFeatureField::OPTION_ENABLED,
				'unittest-ft1',
				HTMLFeatureField::OPTION_ENABLED,
				'Hooks did not set the preference though global auto-enroll was set.',
			],

			[
				null,
				null,
				'unittest-ft1',
				null,
				'Hooks set the preference though group auto-enroll was not set.'
			],

			[
				'unittest-all',
				HTMLFeatureField::OPTION_ENABLED,
				'unittest-ft1',
				HTMLFeatureField::OPTION_ENABLED,
				'Hooks did not set the preference though group auto-enroll was set.',
			],

			[
				null,
				null,
				'unittest-ft2',
				null,
				'Hooks set the preference though no auto-enroll was set.'
			],

			[
				'unittest-all',
				HTMLFeatureField::OPTION_ENABLED,
				'unittest-ft2',
				HTMLFeatureField::OPTION_ENABLED,
				'Hooks did not set the preference though grandparent group auto-enroll was set.',
			],

			[
				'betafeatures-auto-enroll',
				HTMLFeatureField::OPTION_ENABLED,
				'unittest-ft2',
				HTMLFeatureField::OPTION_ENABLED,
				'Hooks did not set the preference though global auto-enroll was set.',
			],

			[
				'betafeatures-auto-enroll',
				HTMLFeatureField::OPTION_ENABLED,
				'unittest-ft3',
				null,
				'The preferences was not set despite auto-enroll ' .
					'because it is exempt-from-auto-enrollment.',
			],
		];
	}

	protected function setUp(): void {
		global $wgHooks;

		parent::setUp();

		$wgHooks['GetBetaFeaturePreferences'] =
			[ 'AutoEnrollmentTest::hookThatRegistersPreference' ];
	}

	/**
	 * @dataProvider provideTestData
	 */
	public function testAutoEnroll( $set, $setVal, $check, $expected, $msg ) {
		$user = $this->user;
		$prefs = [];

		if ( $set !== null ) {
			$this->getServiceContainer()->getUserOptionsManager()
				->setOption( $user, $set, $setVal );
		}

		Hooks::run( 'GetPreferences', [ $user, &$prefs ] );

		$value = $user->getOption( $check );
		if ( $expected === null ) {
			$this->assertNull( $value, $msg );
		} else {
			$this->assertEquals( $expected, $value, $msg );
		}
	}
}
