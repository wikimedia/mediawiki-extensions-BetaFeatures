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

$( function () {
	var $autoEnrollCheckbox, preference, unsupportedList,
		featuresModel = mw.config.get( 'wgBetaFeaturesFeatures', [] );

	// eslint-disable-next-line no-jquery/no-global-selector
	$autoEnrollCheckbox = OO.ui.infuse( $( '[name=wpbetafeatures-auto-enroll]' ).parent() );
	$autoEnrollCheckbox.connect( this, { change: function ( selectedState ) {
		for ( preference in featuresModel ) {
			// Some preferences don't follow the auto-enroll process; ignore them
			if ( featuresModel[ preference ][ '__skip-auto-enroll' ] ) {
				continue;
			}

			// Mass-select auto-enrollable features if clicked, but don't mass-disable
			if ( selectedState ) {
				featuresModel[ preference ].widget.setSelected( true );
			}

			// Mass-disable toggle based on auto-enroll state, as it controls if you can
			featuresModel[ preference ].widget.setDisabled( selectedState );

			// If it is now disabled, hint to the user why with a tooltip
			featuresModel[ preference ].widget.setTitle( selectedState ? mw.msg( 'betafeatures-feature-autoenrolled' ) : null );
		}
	} } );

	for ( preference in featuresModel ) {
		featuresModel[ preference ].widget = OO.ui.infuse( $( '[name=wp' + preference + ']' ).parent() );

		unsupportedList = featuresModel[ preference ].unsupportedList;

		// Browser not compatible
		if ( unsupportedList && $.client.test( unsupportedList, null, true ) ) {
			featuresModel[ preference ].widget.$element
				.closest( '.mw-ui-feature-field' )
				.find( '.mw-ui-feature-requirements-browser' ).show();
		}
	}
} );
