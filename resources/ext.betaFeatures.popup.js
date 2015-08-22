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
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

( function ( mw, $ ) {
	var $link;
	if ( !mw.user.options.get( 'betafeatures-popup-disable' ) ) {
		$link = $( '#pt-betafeatures a' );

		if ( $link.length > 0 ) {
			$link.tipsy()
				.prop( 'title', mw.message( 'betafeatures-tooltip' ).text() )
				.tipsy( 'show' );
		}

		new mw.Api().post( {
			action: 'tokens',
			type: 'options'
		} ).done( function ( data ) {
			if ( data && data.tokens && data.tokens.optionstoken ) {
				new mw.Api().post( {
					action: 'options',
					change: 'betafeatures-popup-disable=1',
					token: data.tokens.optionstoken
				} );
			}
		} );
	}
}( mediaWiki, jQuery ) );
