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
 * Preference handling tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

/**
 * @group BetaFeatures
 */
class PreferenceHandlingTest extends BetaFeaturesTestCase {

	const testPrefKey = 'unittest';

	static function preferenceListing() {
		$invalidPref = [
			'screenshot' => 'google it bro',
		];

		$validPref = [
			'label-message' => 'soup-label',
			'desc-message' => 'something-something-desc-side',
			'info-link' => 'http://example.org/features',
			'discussion-link' => 'http://example.org/feedback',
		];

		$validPrefPostHook = $validPref;
		$validPrefPostHook['class'] = 'HTMLFeatureField';
		$validPrefPostHook['section'] = 'betafeatures';

		return [
			[ 'Invalid preference should cause an error', $invalidPref, null ],
			[
				'Totally valid preference should get set accurately', $validPref, $validPrefPostHook
			],
		];
	}

	/**
	 * @dataProvider preferenceListing
	 */
	public function testHandlingOfPreferences( $msg, $pref, $expected ) {
		global $wgHooks;
		$prefkey = self::testPrefKey;
		$prefs = [];
		$wgHooks['GetBetaFeaturePreferences'] = [
			function ( $user, &$prefs ) use ( $pref, $prefkey ) {
				$prefs[$prefkey] = $pref;
				return true;
			}
		];

		try {
			Hooks::run( 'GetPreferences', [ $this->user, &$prefs ] );
		} catch ( BetaFeaturesMissingFieldException $e ) {
			if ( $expected === null ) {
				$this->assertEquals( 'BetaFeaturesMissingFieldException', get_class( $e ) );
				return;
			} else {
				throw $e;
			}
		}

		if ( $expected === null ) {
			$this->fail( $msg );
		} else {
			$this->assertArrayHasKey( $prefkey, $prefs );
			$this->assertEquals( $expected, $prefs[$prefkey] );
		}
	}
}
