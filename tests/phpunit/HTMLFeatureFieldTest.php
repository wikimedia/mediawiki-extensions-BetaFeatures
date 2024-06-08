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
 * HTML feature field tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

use MediaWiki\Context\RequestContext;
use MediaWiki\Extension\BetaFeatures\HTMLFeatureField;
use MediaWiki\HTMLForm\HTMLForm;
use MediaWiki\Title\Title;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\HTMLFeatureField
 *
 * @group BetaFeatures
 */
class HTMLFeatureFieldTest extends MediaWikiIntegrationTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( [
			'blahblahblah' => [
				'class' => HTMLFeatureField::class,
				'label-message' => 'betafeatures-test-check-field',
				'desc-message' => 'betafeatures-test-feature-field',
				'info-link' => 'http://example.org/features',
				'discussion-link' => 'http://example.org/feedback',
			],
		], RequestContext::getMain() );
		$form->setTitle( Title::newMainPage() );
		$form->prepareForm();
		$html = $form->getHTML( false );

		$cases = [
			[
				'pattern' => '#<tr class="mw-htmlform-field-HTMLFeatureField">#',
				'message' => 'Table row with class name not found.',
			],
			[
				'pattern' => "#<input type='checkbox' tabindex='0' (?:aria-disabled='false' )?" .
					"name='wpblahblahblah' value='1' id='ooui-php-\d+' class='oo-ui-inputWidget-input' />#",
				'message' => 'Styled checkbox input not found.',
			],
			[
				'pattern' => "#<label for='ooui-php-\d+' class='oo-ui-labelElement-label'>" .
					"blah blah blah</label>#",
				'message' => 'Checkbox label not found.',
			],
			[
				'pattern' => '#<p class="mw-ui-feature-description">This is a test feature - ' .
					'it should not show up.</p>#',
				'message' => 'Feature description not found',
			],
			[
				'pattern' => '#<div class="mw-ui-feature-meta">#',
				'message' => 'Meta div not found.',
			],
			[
				'pattern' => '#<a href="http://example.org/features" class="mw-ui-feature-info-link">#',
				'message' => 'Feature information link not found',
			],
			[
				'pattern' => '#<a href="http://example.org/feedback" class="mw-ui-feature-discussion-link">#',
				'message' => 'Discussion link not found',
			],
			[
				'pattern' => '#<div class="mw-ui-feature-screenshot-contain"></div>#',
				'message' => 'Screenshot div not empty or not found.',
			],
		];

		foreach ( $cases as $case ) {
			$this->assertMatchesRegularExpression(
				$case['pattern'],
				$html,
				$case['message']
			);
		}
	}
}
