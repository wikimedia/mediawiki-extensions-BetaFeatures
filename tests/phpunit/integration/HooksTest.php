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
 * BetaFeatures hooks tests
 *
 * @file
 * @ingroup Extensions
 * @license GPL-2.0-or-later
 */

use MediaWiki\Request\FauxRequest;
use MediaWiki\Tests\User\TempUser\TempUserTestTrait;
use MediaWiki\Title\Title;
use MediaWiki\User\UserIdentityValue;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\Hooks
 * @group BetaFeatures
 * @group Database
 */
class HooksTest extends BetaFeaturesDatabaseTestCase {

	use TempUserTestTrait;

	/** @dataProvider provideOnSkinTemplateNavigationUniversal */
	public function testOnSkinTemplateNavigationUniversal( $userIdentity, $links, $shouldAddMenuLink ) {
		// Construct a mock SkinTemplate class with the necessary methods defined
		$skinTemplate = $this->createMock( SkinTemplate::class );
		$skinTemplate->method( 'getUser' )
			->willReturn( $this->getServiceContainer()->getUserFactory()->newFromUserIdentity( $userIdentity ) );
		$skinTemplate->method( 'getTitle' )
			->willReturn( Title::newFromText( 'Test' ) );
		// Call the hook handler we are testing
		$this->newBFHooks()->onSkinTemplateNavigation__Universal( $skinTemplate, $links );
		// Verify that that the $links array is as expected after the call
		if ( $shouldAddMenuLink ) {
			$this->assertArrayHasKey( 'user-menu', $links );
			$this->assertArrayHasKey( 'betafeatures', $links['user-menu'] );
		} else {
			if ( array_key_exists( 'user-menu', $links ) ) {
				$this->assertArrayNotHasKey( 'betafeatures', $links['user-menu'] );
			} else {
				// We have already tested that the 'betafeatures' key is not present by checking if the
				// 'user-menu' key existed. As such, we don't need to perform any more checks. Because the
				// array_key_exists call isn't a PHPUnit assertion, we need to expect no assertions.
				$this->expectNotToPerformAssertions();
			}
		}
	}

	public static function provideOnSkinTemplateNavigationUniversal() {
		return [
			'Anon user with empty links array' => [ UserIdentityValue::newAnonymous( '1.2.3.4' ), [], false ],
			'Anon user' => [ UserIdentityValue::newAnonymous( '1.2.3.4' ), [ 'user-menu' => [] ], false ],
		];
	}

	public function testOnSkinTemplateNavigationUniversalForTemporaryAccount() {
		$this->enableAutoCreateTempUser();
		$user = $this->getServiceContainer()->getTempUserCreator()->create( null, new FauxRequest() )->getUser();
		$this->testOnSkinTemplateNavigationUniversal( $user, [], false );
	}

	/** @dataProvider provideOnSkinTemplateNavigationUniversalForNamedAccount */
	public function testOnSkinTemplateNavigationUniversalForNamedAccount( $links, $shouldAddMenuLink ) {
		$user = $this->getTestUser()->getUser();
		$this->testOnSkinTemplateNavigationUniversal( $user, $links, $shouldAddMenuLink );
	}

	public static function provideOnSkinTemplateNavigationUniversalForNamedAccount() {
		return [
			'Named account with no preferences link' => [ [ 'user-menu' => [ 'talk' => [] ] ], false ],
			'Named account with preferences link' => [ [ 'user-menu' => [ 'preferences' => [] ] ], true ],
		];
	}
}
