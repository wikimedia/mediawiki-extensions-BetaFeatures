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

class NewCheckFieldTest extends MediaWikiTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( array(
			'blahblahblah' => array(
				'class' => 'NewHTMLCheckField',
				'label-message' => 'betafeatures-test-check-field',
				'default' => true,
			)
		) );
		$form->setTitle( Title::newMainPage() );
		$html = $form->getHTML( false );

		$this->assertRegExp( '#<tr class="mw-htmlform-field-NewHTMLCheckField">#', $html, 'Table row with class name not found.' );
		$this->assertRegExp( '#<div class="mw-ui-checkbox"><input name="wpblahblahblah" type="checkbox" value="1" id="mw-input-wpblahblahblah" /><label for="mw-input-wpblahblahblah"></label><label for="mw-input-wpblahblahblah" class="mw-ui-text-check-label">blah blah blah</label>#', $html, 'Styled checkbox label and input not found.' );
		$this->assertRegExp( '#<label for="mw-input-wpblahblahblah" class="mw-ui-text-check-label">blah blah blah</label>#', $html, 'Checkbox label not found.' );
	}
}
