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
 * HTML feature field
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

class HTMLFeatureField extends NewHTMLCheckField {

	const OPTION_ENABLED = '1';
	const OPTION_DISABLED = '0';

	// suppress labels (see getHeaderHTML)
	protected $includeLabel = false;

	function __construct( $options ) {
		// We need the new checkbox style to have a sane-looking field
		$options['mw-ui'] = true;
		parent::__construct( $options );
	}

	function getHeaderHTML( $value ) {
		$html = Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-header',
		) );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-title-contain',
		) );

		$html .= Html::rawElement( 'div', array(
			'class' => 'mw-ui-feature-title',
		), $this->getPostCheckboxLabelHTML() );

		// Close -title-contain
		$html .= Html::closeElement( 'div' );

		if ( isset( $this->mParams['info-message'] ) ) {
			$infoLink = $this->mParent->msg( $this->mParams['info-message'] )->escaped();
		}
		else {
			$infoLink = $this->mParams['info-link'];
		}

		if ( isset( $this->mParams['discussion-message'] ) ) {
			$discussionLink = $this->mParent->msg( $this->mParams['discussion-message'] )->escaped();
		}
		else {
			$discussionLink = $this->mParams['discussion-link'];
		}

		$infoLinkClasses = array(
			'mw-ui-feature-info-links',
		);

		if ( isset( $infoLink ) || isset( $discussionLink ) ) {
			$infoLinkClasses[] = 'filled';
		}

		$html .= Html::openElement( 'div', array(
			'class' => $infoLinkClasses,
		) );

		if ( isset( $infoLink ) ) {
			$html .= Html::rawElement( 'a', array(
				'href' => $infoLink,
				'class' => 'mw-ui-feature-info-link',
			), $this->mParent->msg( 'mw-ui-feature-info' )->escaped() );
			$html .= ' ';
		}

		if ( isset( $discussionLink ) ) {
			$html .= Html::rawElement( 'a', array(
				'href' => $discussionLink,
				'class' => 'mw-ui-feature-discussion-link',
			), $this->mParent->msg( 'mw-ui-feature-discuss' )->escaped() );
		}

		// mw-ui-feature-info-links
		$html .= Html::closeElement( 'div' );

		// Close -header
		$html .= Html::closeElement( 'div' );

		return $html;
	}

	function getMainHTML( $value ) {
		$parent = $this->mParent;

		$html = Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-main',
		) );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-meta',
		) );

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
				$parent->msg( $this->mParams['desc-message'] )->parse() );
		}

		$html .= Html::openElement( 'ul', array(
			'class' => 'mw-ui-feature-requirements-list',
		) );

		if ( isset( $this->mParams['requirements'] ) ) {
			if (
				isset( $this->mParams['requirements']['javascript'] ) &&
				$this->mParams['requirements']['javascript']
			) {
				$html .= Html::rawElement(
					'li',
					array( 'class' => 'mw-ui-feature-requirements-javascript' ),
					$parent->msg( 'mw-ui-feature-requirements-javascript' )->escaped()
				);
			}

			if ( isset( $this->mParams['requirements']['blacklist'] ) ) {
				$html .= Html::openElement(
					'li',
					array( 'class' => 'mw-ui-feature-requirements-browser' )
				);
				$browserCount = count( $this->mParams['requirements']['blacklist'] );
				$html .= $parent->msg( 'mw-ui-feature-requirements-browser', $browserCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $this->mParams['requirements']['blacklist'] as $browser => $versions ) {
					$browserString = $browser;
					if ( $versions ) {
						foreach ( $versions as $version ) {
							$browserString .= ' ' . implode( ' ', $version );
						}
					}
					$html .= Html::element(
						'li',
						array(),
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
					array( 'class' => 'mw-ui-feature-requirements-skins' )
				);
				$skinCount = count( $this->mParams['requirements']['skins'] );
				$html .= $parent->msg( 'mw-ui-feature-requirements-skins', $skinCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $this->mParams['requirements']['skins'] as $skin ) {
					$html .= Html::element(
						'li',
						array(),
						$parent->msg( "skinname-$skin" )->text()
					);
				}
				$html .= Html::closeElement( 'ul' );
				$html .= Html::closeElement( 'li' );
			}

			if ( isset( $this->mParams['requirements']['betafeatures-messages'] ) ) {
				$html .= Html::openElement(
					'li',
					array( 'class' => 'mw-ui-feature-requirements-betafeatures' )
				);
				$featureCount = count( $this->mParams['requirements']['betafeatures-messages'] );
				$html .= $parent->msg( 'mw-ui-feature-requirements-betafeatures', $featureCount )->escaped();
				$html .= Html::openElement( 'ul' );
				foreach ( $this->mParams['requirements']['betafeatures-messages'] as $message ) {
					$html .= Html::rawElement(
						'li',
						array(),
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

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-screenshot-contain',
		) );

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

			$html .= Html::element( 'img', array(
				'src' => $screenshot,
				'class' => 'mw-ui-feature-screenshot',
			) );
		}

		// Close -screenshot-contain
		$html .= Html::closeElement( 'div' );

		// Close -main
		$html .= Html::closeElement( 'div' );

		return $html;
	}

	function getInputHTML( $value ) {
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

		$html .= $this->getCheckboxHTML( $value, $attrs );

		$html .= Html::openElement( 'div', array(
			'class' => 'mw-ui-feature-contain',
		) );

		$html .= $this->getHeaderHTML( $value );
		$html .= $this->getMainHTML( $value );

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
		} elseif ( $res === false ) {
			return HTMLFeatureField::OPTION_DISABLED;
		} else {
			// Dunno what happened, but I'm not gonna fight it.
			return $res;
		}
	}
}
