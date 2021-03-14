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
 * New check field tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

use MediaWiki\Extension\BetaFeatures\NewHTMLCheckField;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\NewHTMLCheckField
 *
 * @group BetaFeatures
 */
class NewHTMLCheckFieldTest extends MediaWikiTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( [
			'blahblahblah' => [
				'class' => NewHTMLCheckField::class,
				'label-message' => 'betafeatures-test-check-field',
				'default' => true,
			]
		] );
		$form->setTitle( Title::newMainPage() );
		$form->prepareForm();
		$html = $form->getHTML( false );

		$this->assertRegExp(
			'#<tr class="mw-htmlform-field-NewHTMLCheckField">#',
			$html,
			'Table row with class name not found.'
		);
		$this->assertRegExp(
			"#<input type='checkbox' tabindex='0' aria-disabled='false' name='wpblahblahblah' " .
				"value='1' checked='checked' id='ooui-php-\d+' class='oo-ui-inputWidget-input' />#",
			$html,
			'Styled input not found.'
		);
		$this->assertRegExp(
			"#<label for='ooui-php-\d+' class='oo-ui-labelElement-label'>blah blah blah</label>#",
			$html,
			'Checkbox label not found.'
		);
	}
}
