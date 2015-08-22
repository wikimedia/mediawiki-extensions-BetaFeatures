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
 * BetaFeatures initialization
 *
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

( function ( mw, $ ) {
	$( function () {
		var preference, blacklist, $input, $field,
			features = mw.config.get( 'wgBetaFeaturesFeatures' );

		for ( preference in features ) {
			$input = $( '#mw-input-wp' + preference );
			$field = $input.closest( '.mw-ui-feature-field' );
			blacklist = features[ preference ] && features[ preference ].blacklist;

			if ( blacklist && $.client.test( blacklist, null, true ) ) {
				// Browser not compatible
				$field.find( '.mw-ui-feature-requirements-browser' ).show();
			}
		}
	} );
}( mediaWiki, jQuery ) );
