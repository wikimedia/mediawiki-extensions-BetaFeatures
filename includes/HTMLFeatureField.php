<?php
/**
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
 * HTML feature field
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

namespace MediaWiki\Extension\BetaFeatures;

use MediaWiki\Html\Html;
use MediaWiki\HTMLForm\Field\HTMLCheckField;
use MediaWiki\HTMLForm\HTMLFormFieldLayout;
use OOUI\CheckboxInputWidget;
use OOUI\IconWidget;

class HTMLFeatureField extends HTMLCheckField {
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

		$extraParams = [];
		// Only support disable here, it shouldn't be hide partially
		if ( isset( $this->mParams['disable-if'] ) ) {
			$extraParams['classes'] = [ 'mw-htmlform-disable-if' ];
			$extraParams['condState']['disable'] = $this->parseCondState( $this->mParams['disable-if'] );
		}
		return Html::openElement( 'div', [ 'class' => 'mw-ui-feature-checkbox' ] ) .
			new HTMLFormFieldLayout(
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
					'infusable' => true,
					'align' => 'inline',
					'label' => $this->mLabel,
				] + $extraParams
			) .
			Html::closeElement( 'div' );
	}

	/**
	 * @param string $value
	 * @return string HTML
	 */
	private function getHeaderHTML( $value ) {
		$html = Html::openElement( 'div', [ 'class' => 'mw-ui-feature-header' ] );

		$html .= Html::rawElement(
			'div',
			[ 'class' => 'mw-ui-feature-title-contain' ],
			$this->getCheckboxHTML( $value )
		);

		if ( isset( $this->mParams['info-message'] ) ) {
			$infoLink = $this->mParent->msg( $this->mParams['info-message'] )->text();
		} else {
			$infoLink = $this->mParams['info-link'];
		}

		if ( isset( $this->mParams['discussion-message'] ) ) {
			$discussionLink = $this->mParent->msg( $this->mParams['discussion-message'] )->text();
		} else {
			$discussionLink = $this->mParams['discussion-link'];
		}

		$infoLinkClasses = [ 'mw-ui-feature-info-links' ];

		if ( $infoLink !== null || $discussionLink !== null ) {
			$infoLinkClasses[] = 'filled';
		}

		$html .= Html::openElement( 'div', [ 'class' => $infoLinkClasses ] );

		$out = $this->mParent->getOutput();

		if ( $infoLink !== null ) {
			$out->addModuleStyles( 'oojs-ui.styles.icons-content' );
			$html .= Html::rawElement( 'a', [
					'href' => $infoLink,
					'class' => 'mw-ui-feature-info-link',
				],
				new IconWidget( [ 'icon' => 'article' ] ) .
				$this->mParent->msg( 'mw-ui-feature-info' )->escaped()
			);
			$html .= ' ';
		}

		if ( $discussionLink !== null ) {
			$out->addModuleStyles( 'oojs-ui.styles.icons-alerts' );
			$html .= Html::rawElement( 'a', [
					'href' => $discussionLink,
					'class' => 'mw-ui-feature-discussion-link',
				],
				new IconWidget( [ 'icon' => 'speechBubbles' ] ) .
				$this->mParent->msg( 'mw-ui-feature-discuss' )->escaped()
			);
		}

		// Close mw-ui-feature-info-links and then -header
		$html .= Html::closeElement( 'div' ) . Html::closeElement( 'div' );

		return $html;
	}

	/**
	 * @param string $value
	 * @return string HTML
	 */
	private function getMainHTML( $value ) {
		$parent = $this->mParent;

		$html = Html::openElement( 'div', [ 'class' => 'mw-ui-feature-main' ] );

		$html .= Html::openElement( 'div', [ 'class' => 'mw-ui-feature-meta' ] );

		if ( isset( $this->mParams['user-count'] ) ) {
			$userCountMsg = 'mw-ui-feature-user-count';

			if ( isset( $this->mParams['user-count-msg'] ) ) {
				$userCountMsg = $this->mParams['user-count-msg'];
			}

			$html .= Html::rawElement(
				'p',
				[ 'class' => 'mw-ui-feature-user-count' ],
				$parent->msg( $userCountMsg )->numParams( $this->mParams['user-count'] )->escaped()
			);
		}

		if ( isset( $this->mParams['desc-message'] ) ) {
			$html .= Html::rawElement(
				'p',
				[ 'class' => 'mw-ui-feature-description' ],
				$parent->msg( $this->mParams['desc-message'] )->parse() );
		}

		$html .= Html::openElement( 'ul', [ 'class' => 'mw-ui-feature-requirements-list' ] );

		if ( isset( $this->mParams['requirements'] ) ) {
			if (
				isset( $this->mParams['requirements']['javascript'] ) &&
				$this->mParams['requirements']['javascript']
			) {
				$html .= Html::rawElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-javascript' ],
					$parent->msg( 'mw-ui-feature-requirements-javascript' )->escaped()
				);
			}

			$unsupportedList = $this->mParams['requirements']['unsupportedList'] ?? false;
			if ( $unsupportedList ) {
				$html .= Html::openElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-browser' ]
				);
				$browserCount = count( $unsupportedList );
				$html .= $parent->msg( 'mw-ui-feature-requirements-browser', $browserCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $unsupportedList as $browser => $versions ) {
					$browserString = $browser;
					if ( $versions ) {
						foreach ( $versions as $version ) {
							$browserString .= ' ' . implode( ' ', $version );
						}
					}
					$html .= Html::element(
						'li',
						[],
						$browserString
					);
				}
				$html .= Html::closeElement( 'ul' );
				$html .= Html::closeElement( 'li' );
			}

			if (
				isset( $this->mParams['requirements']['skin-not-supported'] ) &&
				$this->mParams['requirements']['skin-not-supported'] === true
			) {
				$html .= Html::openElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-skins' ]
				);
				$skinCount = count( $this->mParams['requirements']['skins'] );
				$html .= $parent->msg( 'mw-ui-feature-requirements-skins', $skinCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $this->mParams['requirements']['skins'] as $skin ) {
					$html .= Html::element(
						'li',
						[],
						$parent->msg( "skinname-$skin" )->text()
					);
				}
				$html .= Html::closeElement( 'ul' );
				$html .= Html::closeElement( 'li' );
			}

			if ( isset( $this->mParams['requirements']['betafeatures-messages'] ) ) {
				$html .= Html::openElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-betafeatures' ]
				);
				$featureCount = count( $this->mParams['requirements']['betafeatures-messages'] );
				$html .= $parent->msg( 'mw-ui-feature-requirements-betafeatures', $featureCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $this->mParams['requirements']['betafeatures-messages'] as $message ) {
					$html .= Html::rawElement(
						'li',
						[],
						$parent->msg( $message )->escaped()
					);
				}
				$html .= Html::closeElement( 'ul' );
				$html .= Html::closeElement( 'li' );
			}
		}

		// mw-ui-feature-requirements-list
		$html .= Html::closeElement( 'ul' );

		// Close -meta
		$html .= Html::closeElement( 'div' );

		$html .= Html::openElement( 'div', [ 'class' => 'mw-ui-feature-screenshot-contain' ] );

		if ( isset( $this->mParams['screenshot'] ) ) {
			$screenshot = $this->mParams['screenshot'];

			// The screenshot parameter is either a string with a filename
			// or an array that specifies a screenshot for each language,
			// and default screenshots for rtl and ltr languages
			if ( is_array( $screenshot ) ) {
				$language = $this->mParent->getLanguage();
				$langCode = $language->getCode();

				if ( array_key_exists( $langCode, $screenshot ) ) {
					$screenshot = $screenshot[$langCode];
				} else {
					$screenshot = $screenshot[$language->getDir()];
				}
			}

			$html .= Html::element( 'img', [
				'src' => $screenshot,
				'class' => 'mw-ui-feature-screenshot',
				'alt' => '',
			] );
		}

		// Close -screenshot-contain and then -main
		$html .= Html::closeElement( 'div' ) . Html::closeElement( 'div' );

		return $html;
	}

	/** @inheritDoc */
	public function getInputHTML( $value ) {
		$divClasses = [ 'mw-ui-feature-field' ];

		// Use 'cssclass' to populate this. Separate from 'class', of course.
		if ( $this->mClass !== '' ) {
			$divClasses[] = $this->mClass;
		}

		return Html::rawElement(
			'div',
			[ 'class' => $divClasses ],
			Html::rawElement(
				'div',
				[ 'class' => 'mw-ui-feature-contain' ],
				$this->getHeaderHTML( $value ) . $this->getMainHTML( $value )
			)
		);
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
