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
 * HTML horizontal rule field
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

namespace MediaWiki\Extension\BetaFeatures;

use MediaWiki\Html\Html;
use MediaWiki\HTMLForm\HTMLFormField;

class HTMLHorizontalRuleField extends HTMLFormField {

	/**
	 * This field type is meant to be used for a block of text, so
	 * the right-aligned label style doesn't really apply.
	 * @return string
	 */
	public function getLabel() {
		return '&#160;';
	}

	/**
	 * Pretty much ignores its arguments and returns a raw HR tag.
	 * @param string $value
	 * @return string
	 */
	public function getInputHTML( $value ) {
		return Html::element( 'hr', [] );
	}
}
