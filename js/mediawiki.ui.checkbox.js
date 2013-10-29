/*!
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
 * MediaWiki UserInterface checkbox
 *
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

( function ( mw, $ ) {
	$( function () {
		/**
		 * @class jQuery.plugin.styledCheckbox
		 */

		/**
		 * Adds appropriate onchange event handlers to a checkbox field
		 * that is styled by hiding it and styling a label wrapper.
		 *
		 * Example HTML:
		 *     <label class="pretty-checkbox">
		 *       <input type="checkbox" />&nbsp;
		 *     </label>
		 * CSS:
		 *     .pretty-checkbox {
		 *         padding: 2px 8px;
		 *         border: 1px solid grey;
		 *     }
		 *
		 *     .pretty-checkbox.mw-ui-checked {
		 *         background-color: blue;
		 *     }
		 *
		 *     .pretty-checkbox input[type=checkbox] {
		 *         position: absolute;
		 *         clip: rect(1px 1px 1px 1px);
		 *         clip: rect(1px,1px,1px,1px);
		 *     }
		 * JS:
		 *     $( '.pretty-checkbox input[type=checkbox]' ).styledCheckbox( '.pretty-checkbox' );
		 *
		 * @method
		 * @param {string} [selector='.mw-ui-styled-checkbox-label'] How to select the label (will be passed to $.closest)
		 * @param {string} [checkedClass='mw-ui-checked'] Class to toggle on the label element on change events
		 * @chainable
		 * @return {jQuery}
		 */
		$.fn.styledCheckbox = function ( selector, checkedClass ) {
			function handleCheckboxChangeEvent() {
				var $check = $( this ),
					$label = $check.closest( selector );

				$label.toggleClass( checkedClass, $check.prop( 'checked' ) );
			}

			selector = selector || '.mw-ui-styled-checkbox-label';
			checkedClass = checkedClass || 'mw-ui-checked';

			this.on( 'change', handleCheckboxChangeEvent );
			return this;
		};

		$( '.mw-ui-styled-checkbox-label input[type=checkbox]' ).styledCheckbox();
	} );
}( mediaWiki, jQuery ) );
