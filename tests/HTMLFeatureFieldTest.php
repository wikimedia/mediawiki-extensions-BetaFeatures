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
 * HTML feature field tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class HTMLFeatureFieldTest extends MediaWikiTestCase {

	protected function setUp() {
		parent::setUp();

		$this->setMwGlobals( array(
			'wgWellFormedXml' => true,
		) );
	}

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( array(
			'blahblahblah' => array(
				'class' => 'HTMLFeatureField',
				'label-message' => 'betafeatures-test-check-field',
				'desc-message' => 'betafeatures-test-feature-field',
				'info-link' => 'http://example.org/features',
				'discussion-link' => 'http://example.org/feedback',
			),
		) );
		$form->setTitle( Title::newMainPage() );
		$html = $form->getHTML( false );

		$cases = array(
			array(
				'pattern' => '#<tr class="mw-htmlform-field-HTMLFeatureField">#',
				'message' => 'Table row with class name not found.',
			),
			array(
				'pattern' => '#<div class="mw-ui-checkbox"><input name="wpblahblahblah" type="checkbox" value="1" id="mw-input-wpblahblahblah" class="mw-ui-feature-toggle" /><label for="mw-input-wpblahblahblah"></label>#',
				'message' => 'Styled checkbox label and input not found.',
			),
			array(
				'pattern' => '#<label for="mw-input-wpblahblahblah" class="mw-ui-text-check-label">blah blah blah</label>#',
				'message' => 'Checkbox label not found.',
			),
			array(
				'pattern' => '#<p class="mw-ui-feature-description">This is a test feature - it should not show up.</p>#',
				'message' => 'Feature description not found',
			),
			array(
				'pattern' => '#<div class="mw-ui-feature-meta">#',
				'message' => 'Meta div not found.',
			),
			array(
				'pattern' => '#<a href="http://example.org/features" class="mw-ui-feature-info-link">information</a>#',
				'message' => 'Feature information link not found',
			),
			array(
				'pattern' => '#<a href="http://example.org/feedback" class="mw-ui-feature-discussion-link">discussion</a>#',
				'message' => 'Discussion link not found',
			),
			array(
				'pattern' => '#<div class="mw-ui-feature-screenshot-contain"></div>#',
				'message' => 'Screenshot div not empty or not found.',
			),
		);

		foreach ( $cases as $case ) {
			$this->assertRegExp(
				$case['pattern'],
				$html,
				$case['message']
			);
		}

	}
}
