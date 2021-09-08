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

namespace MediaWiki\Extension\BetaFeatures;

use Html;
use HTMLCheckField;
use OOUI\CheckboxInputWidget;
use OOUI\FieldLayout;

class NewHTMLCheckField extends HTMLCheckField {

	// Protected internal methods for getting the bits of the field
	// Override these in subclasses (see HTMLFeatureField, e.g.)

	/**
	 * @param string $value
	 * @return string
	 */
	protected function getCheckboxHTML( $value ) {
		if ( !empty( $this->mParams['invert'] ) ) {
			$value = !$value;
		}

		$out = $this->mParent->getOutput();
		$out->addModules( 'ext.betaFeatures' );
		$out->addModuleStyles( 'ext.betaFeatures.styles' );
		$out->enableOOUI();

		// TODO: Support $this->getTooltipAndAccessKey?

		return Html::openElement( 'div', [ 'class' => 'mw-ui-feature-checkbox' ] ) .
			new FieldLayout(
				new CheckboxInputWidget( [
					'infusable' => true,
					'name' => $this->mName,
					'selected' => $value,
					'value' => 1,
					'classes' => $this->mClass ? [ $this->mClass ] : [],
					'disabled' => isset( $this->mParams['disabled'] ) &&
						$this->mParams['disabled'] === true,
				] ),
				[
					'align' => 'inline',
					'label' => $this->mLabel,
				]
			) .
			Html::closeElement( 'div' );
	}

	/**
	 * @param string $value
	 * @return string
	 */
	public function getInputHTML( $value ) {
		return $this->getCheckboxHTML( $value );
	}

	/** @inheritDoc */
	public function getInputOOUI( $value ) {
		// Use the same output as for the HTML version, otherwise OOUIHTMLForm would use
		// a plain checkbox, inherited from HTMLCheckField. This isn't actually a widget
		// (just a HTML string) but that's okay, HTMLFormField::getOOUI() will handle it.
		// @phan-suppress-next-line PhanTypeMismatchReturn
		return $this->getInputHTML( $value );
	}

	/** @inheritDoc */
	protected function getFieldLayoutOOUI( $inputField, $config ) {
		// Label is already included in the field's HTML, do not duplicate it
		unset( $config['label'] );
		return parent::getFieldLayoutOOUI( $inputField, $config );
	}
}
