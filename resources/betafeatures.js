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
 * @license GPL-2.0-or-later
 */

( function () {
	mw.hook( 'htmlform.enhance' ).add( function ( $root ) {
		var $autoEnroll = $root.find( '[name=wpbetafeatures-auto-enroll]' ).parent();
		if ( !$autoEnroll.length || $autoEnroll.closest( '.mw-htmlform-autoinfuse-lazy' ).length ) {
			return;
		}

		var featuresModel = mw.config.get( 'wgBetaFeaturesFeatures', {} );

		OO.ui.infuse( $autoEnroll ).on( 'change', function ( selectedState ) {
			Object.keys( featuresModel ).forEach( function ( preference ) {
				// Hidden preference
				if ( !featuresModel[ preference ].widget ) {
					return;
				}

				// Some preferences don't follow the auto-enroll process; ignore them
				if ( featuresModel[ preference ][ '__skip-auto-enroll' ] ) {
					return;
				}

				// Mass-select auto-enrollable features if clicked, but don't mass-disable
				if ( selectedState ) {
					featuresModel[ preference ].widget.setSelected( true );
				}

				// If it is now disabled, hint to the user why with a tooltip
				featuresModel[ preference ].widget.setTitle(
					selectedState ? mw.msg( 'betafeatures-feature-autoenrolled' ) : null
				);
			} );
		} );

		Object.keys( featuresModel ).forEach( function ( preference ) {
			var $checkbox = $root.find( '[name=wp' + preference + ']' );

			// Extensions might hide their preferences late or by a different method
			if ( !$checkbox.length ) {
				return;
			}

			featuresModel[ preference ].widget = OO.ui.infuse( $checkbox.parent() );

			var unsupportedList = featuresModel[ preference ].unsupportedList;

			// Browser not compatible
			if ( unsupportedList && $.client.test( unsupportedList, null, true ) ) {
				featuresModel[ preference ].widget.$element
					.closest( '.mw-ui-feature-field' )
					.find( '.mw-ui-feature-requirements-browser' ).show();
			}
		} );
	} );
}() );
