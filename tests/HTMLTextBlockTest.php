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
 * HTML text block tests
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class HTMLTextBlockFieldTest extends MediaWikiTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( array(
			'blahblahblah' => array(
				'class' => 'HTMLTextBlockField',
				'label' => 'This is a label.',
			),
		) );
		$form->setTitle( Title::newMainPage() );
		$html = $form->getHTML( false );

		$this->assertRegExp( '#<tr class="mw-htmlform-field-HTMLTextBlockField">#', $html, 'Table row with class name not found.' );

		$this->assertRegExp( '#<td class="mw-input"><div>This is a label.</div>\n</td>#', $html, 'Actual text block element not found.' );
	}
}
