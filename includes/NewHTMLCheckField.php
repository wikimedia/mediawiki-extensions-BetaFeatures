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
 * New HTML check field
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class NewHTMLCheckField extends HTMLCheckField {
	/**
	 * @var boolean directive whether to include a label with the checkbox
	 */
	protected $includeLabel = true;

	// Protected internal methods for getting the bits of the field
	// Override these in subclasses (see HTMLFeatureField, e.g.)

	/**
	 * @param $value
	 * @param $attr
	 * @return string
	 */
	protected function getCheckboxHTML( $value, $attr ) {
		if ( !empty( $this->mParams['invert'] ) ) {
			$value = !$value;
		}

		$containerClasses = array( 'mw-ui-checkbox' );
		$labelAttrs = array( 'for' => $this->mID );

		if ( $value ) {
			$containerClasses[] = 'mw-ui-checked';
		}

		if ( !empty( $this->mParams['invert'] ) ) {
			$value = !$value;
		}

		if ( $attr === null ) {
			$attr = $this->getTooltipAndAccessKey();
		}

		$attr['id'] = $this->mID;

		$classes = array();

		if ( isset( $attr['class'] ) ) {
			$classes[] = $attr['class'];
		}

		if ( isset( $this->mParams['disabled'] ) && $this->mParams['disabled'] === true ) {
			$attr['disabled'] = 'disabled';
		}

		if ( $this->mClass !== '' ) {
			$classes[] = $this->mClass;
		}

		if ( $classes ) {
			$attr['class'] = implode( ' ', $classes );
		}

		$out = $this->mParent->getOutput();
		// @todo Ew, these should be split into checkbox styles and preferences page styles
		$out->addModules( 'ext.betaFeatures' );
		$out->addModuleStyles( 'ext.betaFeatures.styles' );
		$out->addModuleStyles( 'mediawiki.ui.checkbox' );
		$labelHtml = $this->includeLabel ? $this->getPostCheckboxLabelHTML() : '';
		return Html::openElement( 'div', array( 'class' => $containerClasses ) ) .
			Xml::check( $this->mName, $value, $attr ) .
			Html::rawElement( 'label', $labelAttrs ) .
			$labelHtml .
			Html::closeElement( 'div' );
	}

	/**
	 * @return string
	 */
	protected function getPostCheckboxLabelHTML() {
		return Html::rawElement(
			'label',
			array( 'for' => $this->mID, 'class' => 'mw-ui-text-check-label' ),
			$this->mLabel
		);
	}

	/**
	 * @param string $value
	 * @param null $attr
	 * @return String
	 */
	function getInputHTML( $value, $attr = null ) {
		return $this->getCheckboxHTML( $value, $attr );
	}
}
