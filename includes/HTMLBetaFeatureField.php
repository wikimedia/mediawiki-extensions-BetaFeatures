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
 */

// This is sort of a forward-looking class, it doesn't do much yet, but we
// intend to have the label be more sexy in the future.
class HTMLBetaFeatureField extends HTMLCheckField {

	function getInputHTML( $value ) {
		$htmls = array();
		$id = $this->mParams['id'];

		$attrs = array(
			'id' => $id,
		);

		$htmls[] = Xml::check( $this->mName, $value, $attrs );
		$htmls[] = Html::rawElement( 'label', array( 'for' => $id ), $this->mLabel );

		return implode( '', $htmls );
	}
}
