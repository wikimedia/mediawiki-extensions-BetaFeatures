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

class HTMLFeatureField extends NewHTMLCheckField {

	const OPTION_ENABLED = '1';
	const OPTION_DISABLED = '0';

	function __construct( $options ) {
		// We need the new checkbox style to have a sane-looking field
		$options['mw-ui'] = true;
		parent::__construct( $options );
	}

	function getInputHTML( $value ) {
		$parent = $this->mParent;
		$html = '';

		$attrs = $this->getTooltipAndAccessKey();
		$attrs['id'] = $this->mID;
		$attrs['class'] = 'mw-ui-feature-toggle';

		$divClasses = array(
			'mw-ui-feature-field',
		);

		// Use 'cssclass' to populate this. Separate from 'class', of course.
		if ( $this->mClass !== '' ) {
			$divClasses[] = $this->mClass;
		}

		if ( isset( $this->mParams['disabled'] ) &&
				$this->mParams['disabled'] === true ) {
			$attrs['disabled'] = true;
		}

		$html .= Html::openElement( 'div', array(
			'class' => implode( ' ', $divClasses ),
		) );

		$html .= Html::rawElement( 'div', array(
			'class' => 'mw-ui-feature-checkbox',
		), $this->getPreCheckboxLabelHTML( $value ) . $this->getCheckboxHtml( $value, $attrs ) );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-contain',
		) );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-main',
		) );

		$html .= Html::rawElement( 'p', array(
			'class' => 'mw-ui-feature-title',
		), $this->getPostCheckboxLabelHTML() );

		if ( isset( $this->mParams['user-count'] ) ) {
			$userCountMsg = 'mw-ui-feature-user-count';

			if ( isset( $this->mParams['user-count-msg'] ) ) {
				$userCountMsg = $this->mParams['user-count-msg'];
			}

			$html .= Html::rawElement(
				'p',
				array( 'class' => 'mw-ui-feature-user-count' ),
				$parent->msg( $userCountMsg )->numParams( $this->mParams['user-count'] )->escaped()
			);

			$attrs['data-count'] = $this->mParams['user-count'];
		}

		if ( isset( $this->mParams['desc-message'] ) ) {
			$html .= Html::rawElement(
				'p',
				array(
					'class' => 'mw-ui-feature-description',
				),
				$parent->msg( $this->mParams['desc-message'] )->escaped() );
		}

		// mw-ui-feature-main
		$html .= Html::closeElement( 'div' );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-meta',
		) );

		$hasInfoLink = isset( $this->mParams['info-link'] );
		$hasDiscussionLink = isset( $this->mParams['discussion-link'] );

		$infoLinkClasses = array(
			'mw-ui-feature-info-links',
		);

		if ( $hasInfoLink || $hasDiscussionLink ) {
			$infoLinkClasses[] = 'filled';
		}

		$html .= Html::openElement( 'div', array(
			'class' => $infoLinkClasses,
		) );

		if ( $hasInfoLink ) {
			$infoLink = Html::rawElement( 'a', array(
				'href' => $this->mParams['info-link'],
				'class' => 'mw-ui-feature-info-link',
			), '&#160;' );

			$html .= Html::rawElement( 'div', array(
				'class' => 'mw-ui-feature-info-link-contain',
			), $infoLink );
		}

		if ( $hasDiscussionLink ) {
			$discussLinkContent = Html::rawElement( 'span', array(
				'class' => 'mw-ui-feature-discussion-link-icon',
			), '&#160;' );
			$discussLinkContent .= Html::rawElement( 'span', array(
				'class' => 'mw-ui-feature-discussion-link-text',
			), $this->mParent->msg( 'mw-ui-feature-discuss' ) );

			$discussLink = Html::rawElement( 'a', array(
				'href' => $this->mParams['discussion-link'],
				'class' => 'mw-ui-feature-discussion-link',
			), $discussLinkContent );

			$html .= Html::rawElement( 'div', array(
				'class' => 'mw-ui-feature-discussion-link-contain',
			), $discussLink );
		}

		// mw-ui-feature-info-links
		$html .= Html::closeElement( 'div' );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-screenshot-contain',
		) );

		if ( isset( $this->mParams['screenshot'] ) ) {
			$html .= Html::rawElement( 'img', array(
				'src' => $this->mParams['screenshot'],
				'class' => 'mw-ui-feature-screenshot',
			) );
		}

		// mw-ui-feature-screenshot
		$html .= Html::closeElement( 'div' );

		// mw-ui-feature-meta
		$html .= Html::closeElement( 'div' );

		// mw-ui-feature-contain
		$html .= Html::closeElement( 'div' );

		// mw-ui-feature-field
		$html .= Html::closeElement( 'div' );

		return $html;
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
