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
 * @file
 * @ingroup extensions
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @copyright Copyright © 2013, Mark Holmquist
 */

class HTMLFeatureFieldTest extends MediaWikiTestCase {

	public function testCreatingFieldGivesExpectedStrings() {
		$form = new HTMLForm( array(
			'blahblahblah' => array(
				'class' => 'HTMLFeatureField',
				'label-message' => 'betafeatures-test-check-field',
				'desc-message' => 'betafeatures-test-feature-field',
				'discussion-link' => 'http://example.org/feature/discussion',
				'info-link' => 'http://example.org/feature',
			),
		) );
		$form->setTitle( Title::newMainPage() );
		$html = $form->getHTML( false );

		$this->assertRegExp( '#<tr class="mw-htmlform-field-HTMLFeatureField">#', $html, 'Table row with class name not found.' );

		$this->assertRegExp( '#<label for="mw-input-wpblahblahblah" class="mw-ui-styled-checkbox-label"><input name="wpblahblahblah" type="checkbox" value="1" id="mw-input-wpblahblahblah" class="mw-ui-feature-toggle mw-ui-checkbox" />&\\#160;</label>#', $html, 'Styled checkbox label and input not found.' );

		$this->assertRegExp( '#<label for="mw-input-wpblahblahblah" class="mw-ui-text-check-label">blah blah blah</label>#', $html, 'Checkbox label not found.' );

		$this->assertRegExp( '#<p class="mw-ui-feature-description">This is a test feature - it should not show up.</p>#', $html, 'Feature description not found' );

		$this->assertRegExp( '#<div class="mw-ui-feature-meta">#', $html, 'Meta div not found.' );

		$this->assertRegExp( '#<div class="mw-ui-feature-info-link-contain"><a href="http://example.org/feature" class="mw-ui-feature-info-link">&\\#160;</a></div>#', $html, 'Feature information link not found' );

		$this->assertRegExp( '#<div class="mw-ui-feature-discussion-link-contain"><a href="http://example.org/feature/discussion" class="mw-ui-feature-discussion-link"><span class="mw-ui-feature-discussion-link-icon">&\\#160;</span><span class="mw-ui-feature-discussion-link-text">discussion</span></a></div>#', $html, 'Discussion link not found' );

		$this->assertRegExp( '#<div class="mw-ui-feature-screenshot-contain"></div>#', $html, 'Screenshot div not empty or not found.' );
	}
}
