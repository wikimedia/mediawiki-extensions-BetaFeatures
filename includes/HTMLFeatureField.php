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
		// TODO: Support $this->getTooltipAndAccessKey?

		$extraParams = [];
		// Only support disable here, it shouldn't be hide partially
		if ( isset( $this->mParams['disable-if'] ) ) {
			$extraParams['classes'] = [ 'mw-htmlform-disable-if' ];
			$extraParams['condState']['disable'] = $this->parseCondState( $this->mParams['disable-if'] );
		}
		return Html::rawElement(
			'div',
			[ 'class' => 'mw-ui-feature-checkbox' ],
			new HTMLFormFieldLayout(
				new CheckboxInputWidget( [
					'infusable' => true,
					'name' => $this->mName,
					'selected' => $value,
					'value' => 1,
					'classes' => $this->mClass ? [ $this->mClass ] : [],
					'disabled' => ( $this->mParams['disabled'] ?? false ) === true,
				] ),
				[
					'infusable' => true,
					'align' => 'inline',
					'label' => $this->mLabel,
				] + $extraParams
			)
		);
	}

	/**
	 * @param string $value
	 * @return string HTML
	 */
	private function getHeaderHTML( $value ) {
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

		$out = $this->mParent->getOutput();
		$infoLinksHtml = '';
		if ( $infoLink !== null ) {
			$out->addModuleStyles( 'oojs-ui.styles.icons-content' );
			$infoLinksHtml .= Html::rawElement( 'a', [
					'href' => $infoLink,
					'class' => 'mw-ui-feature-info-link',
				],
				new IconWidget( [ 'icon' => 'article' ] ) .
				$this->mParent->msg( 'mw-ui-feature-info' )->escaped()
			);
		}

		if ( $discussionLink !== null ) {
			$out->addModuleStyles( 'oojs-ui.styles.icons-alerts' );
			if ( $infoLinksHtml !== '' ) {
				$infoLinksHtml .= ' ';
			}
			$infoLinksHtml .= Html::rawElement( 'a', [
					'href' => $discussionLink,
					'class' => 'mw-ui-feature-discussion-link',
				],
				new IconWidget( [ 'icon' => 'speechBubbles' ] ) .
				$this->mParent->msg( 'mw-ui-feature-discuss' )->escaped()
			);
		}

		return Html::rawElement( 'div', [ 'class' => 'mw-ui-feature-header' ],
			Html::rawElement(
				'div',
				[ 'class' => 'mw-ui-feature-title-contain' ],
				$this->getCheckboxHTML( $value )
			) .
			Html::rawElement( 'div', [ 'class' => $infoLinkClasses ],
				$infoLinksHtml
			)
		);
	}

	/**
	 * @return string HTML
	 */
	private function getMainHTML() {
		$parent = $this->mParent;
		$metaHtml = '';

		if ( isset( $this->mParams['user-count'] ) ) {
			$userCountMsg = $this->mParams['user-count-msg'] ?? 'mw-ui-feature-user-count';
			$metaHtml .= Html::rawElement(
				'p',
				[ 'class' => 'mw-ui-feature-user-count' ],
				$parent->msg( $userCountMsg )->numParams( $this->mParams['user-count'] )->escaped()
			);
		}

		if ( isset( $this->mParams['desc-message'] ) ) {
			$metaHtml .= Html::rawElement(
				'p',
				[ 'class' => 'mw-ui-feature-description' ],
				$parent->msg( $this->mParams['desc-message'] )->parse() );
		}

		$requirementsItemsHtml = '';

		if ( isset( $this->mParams['requirements'] ) ) {
			if ( $this->mParams['requirements']['javascript'] ?? false ) {
				$requirementsItemsHtml .= Html::rawElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-javascript' ],
					$parent->msg( 'mw-ui-feature-requirements-javascript' )->escaped()
				);
			}

			$unsupportedList = $this->mParams['requirements']['unsupportedList'] ?? false;
			if ( $unsupportedList ) {
				$unsupportedItemsHtml = '';
				$browserCount = count( $unsupportedList );
				foreach ( $unsupportedList as $browser => $versions ) {
					$browserString = $browser;
					if ( $versions ) {
						foreach ( $versions as $version ) {
							$browserString .= ' ' . implode( ' ', $version );
						}
					}
					$unsupportedItemsHtml .= Html::element(
						'li',
						[],
						$browserString
					);
				}

				$requirementsItemsHtml .= Html::rawElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-browser' ],
					$parent->msg( 'mw-ui-feature-requirements-browser', $browserCount )->escaped() .
					Html::rawElement( 'ul', [], $unsupportedItemsHtml )
				);
			}

			if ( ( $this->mParams['requirements']['skin-not-supported'] ?? false ) === true ) {
				$skinItemsHtml = '';
				$skinCount = count( $this->mParams['requirements']['skins'] );
				foreach ( $this->mParams['requirements']['skins'] as $skin ) {
					$skinItemsHtml .= Html::element(
						'li',
						[],
						$parent->msg( "skinname-$skin" )->text()
					);
				}

				$requirementsItemsHtml .= Html::rawElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-skins' ],
					$parent->msg( 'mw-ui-feature-requirements-skins', $skinCount )->escaped() .
					Html::rawElement( 'ul', [], $skinItemsHtml )
				);
			}

			if ( isset( $this->mParams['requirements']['betafeatures-messages'] ) ) {
				$featureItemsHtml = '';
				$featureCount = count( $this->mParams['requirements']['betafeatures-messages'] );
				foreach ( $this->mParams['requirements']['betafeatures-messages'] as $message ) {
					$featureItemsHtml .= Html::rawElement(
						'li',
						[],
						$parent->msg( $message )->escaped()
					);
				}

				$requirementsItemsHtml .= Html::rawElement(
					'li',
					[ 'class' => 'mw-ui-feature-requirements-betafeatures' ],
					$parent->msg( 'mw-ui-feature-requirements-betafeatures', $featureCount )->escaped() .
					Html::rawElement( 'ul', [], $featureItemsHtml )
				);
			}
		}

		$metaHtml .= Html::rawElement(
			'ul',
			[ 'class' => 'mw-ui-feature-requirements-list' ],
			$requirementsItemsHtml
		);

		$screenshotHtml = '';

		if ( isset( $this->mParams['screenshot'] ) ) {
			$screenshot = $this->mParams['screenshot'];

			// The screenshot parameter is either a string with a filename
			// or an array that specifies a screenshot for each language,
			// and default screenshots for rtl and ltr languages
			if ( is_array( $screenshot ) ) {
				$language = $this->mParent->getLanguage();
				$langCode = $language->getCode();
				$screenshot = $screenshot[$langCode] ?? $screenshot[$language->getDir()];
			}
			$screenshotHtml .= Html::element( 'img', [
				'src' => $screenshot,
				'class' => 'mw-ui-feature-screenshot',
				'alt' => '',
			] );
		}

		return Html::rawElement( 'div', [ 'class' => 'mw-ui-feature-main' ],
			Html::rawElement(
				'div',
				[ 'class' => 'mw-ui-feature-meta' ],
				$metaHtml
			) .
			Html::rawElement(
				'div',
				[ 'class' => 'mw-ui-feature-screenshot-contain skin-invert' ],
				$screenshotHtml
			)
		);
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
				$this->getHeaderHTML( $value ) . $this->getMainHTML()
			)
		);
	}

	/** @inheritDoc */
	public function getInputOOUI( $value ) {
		$this->mParent->getOutput()->addModuleStyles( 'ext.betaFeatures.styles' );

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

	/** @inheritDoc */
	protected function getOOUIModules() {
		return [ 'ext.betaFeatures' ];
	}
}
