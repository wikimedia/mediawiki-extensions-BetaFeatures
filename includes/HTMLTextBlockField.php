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
 * HTML text block field
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class HTMLTextBlockField extends HTMLFormField {

	/**
	 * Override __construct so we can allow HTML in labels
	 */
	function __construct( $params ) {
		if ( isset( $params['label'] ) ) {
			$label = $params['label'];
		}

		parent::__construct( $params );

		if ( isset( $label ) ) {
			$this->mLabel = $label;
		}
	}

	/**
	 * This field type is meant to be used for a block of text, so
	 * the right-aligned label style doesn't really apply.
	 * @return string
	 */
	function getLabel() {
		return '&#160;';
	}

	/**
	 * Pretty much ignores its arguments and returns the label-message.
	 * @param string $value
	 * @param null $attr
	 * @return string
	 */
	function getInputHTML( $value, $attr = null ) {
		return Html::rawElement( 'div', array(), $this->mLabel );
	}
}
