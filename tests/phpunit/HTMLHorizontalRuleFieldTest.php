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
 * HTML horizontal rule tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

use MediaWiki\Extension\BetaFeatures\HTMLHorizontalRuleField;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\HTMLHorizontalRuleField
 *
 * @group BetaFeatures
 */
class HTMLHorizontalRuleFieldTest extends MediaWikiTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( [
			'blahblahblah' => [
				'class' => HTMLHorizontalRuleField::class,
			],
		] );
		$form->setTitle( Title::newMainPage() );
		$form->prepareForm();
		$html = $form->getHTML( false );

		$this->assertRegExp(
			'#<tr class="mw-htmlform-field-HTMLHorizontalRuleField">#',
			$html,
			'Table row with class name not found.'
		);

		$this->assertRegExp(
			'#<td class="mw-input"><hr/>\n</td>#', $html, 'Actual HR element not found.'
		);
	}
}
