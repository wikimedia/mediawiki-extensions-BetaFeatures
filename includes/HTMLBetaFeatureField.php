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
class HTMLFeatureField extends HTMLCheckField {

	const OPTION_DISABLED = '0';
	const OPTION_ENABLED = '1';

	function getInputHTML( $value ) {
		global $wgExtensionAssetsPath;

		$htmls = array();
		$id = $this->mParams['id'];

		// The first two characters are always "wp" which we don't need
		$prefName = substr( $this->mName, 2 );
		$hasImage = false;

		$attrs = array(
			'id' => $id,
		);

		$htmls[] = Html::openElement( 'div', array(
			'class' => 'beta-feature-field',
		) );

		$hasImage = array_key_exists( 'screenshot', $this->mParams );
		$hasDesc = array_key_exists( 'description', $this->mParams );

		$htmls[] = Html::openElement( 'div', array(
			'class' => 'beta-feature-screenshot',
		) );

		if ( $hasImage ) {
			$src = $this->mParams['screenshot'];
		} else {
			$src = $wgExtensionAssetsPath . '/BetaFeatures/images/null-screenshot.png';
		}

		$htmls[] = Html::rawElement( 'img', array(
			'src' => $src,
		) );

		$htmls[] = Html::closeElement( 'div' );

		$htmls[] = Html::openElement( 'div', array(
			'class' => 'beta-feature-main',
		) );

		if ( $hasDesc ) {
			$htmls[] = Html::rawElement( 'p', array(
				'class' => 'beta-feature-description',
			), $this->mParams['description'] );
		}

		$htmls[] = Html::openElement( 'p' );
		$htmls[] = Xml::check( $this->mName, $value, $attrs );
		$htmls[] = Html::rawElement( 'label', array( 'for' => $id ), $this->mLabel );
		$htmls[] = Html::closeElement( 'p' );

		$htmls[] = Html::closeElement( 'div' );

		$htmls[] = Html::closeElement( 'div' );

		return implode( '', $htmls );
	}

	/**
	 * Override to use integers, so we don't lose the database rows on
	 * unset...
	 */
	function loadDataFromRequest( $request ) {
		$res = parent::loadDataFromRequest( $request );

		if ( $res === true ) {
			return HTMLFeatureField::OPTION_ENABLED;
		} else if ( $res === false ) {
			return HTMLFeatureField::OPTION_DISABLED;
		} else {
			// Dunno what happened, but I'm not gonna fight it.
			return $res;
		}
	}
}
