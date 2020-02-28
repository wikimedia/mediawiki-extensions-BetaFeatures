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
	var preference, $checkbox, blacklist,
		featuresModel = mw.config.get( 'wgBetaFeaturesFeatures', [] );

	for ( preference in featuresModel ) {

		$checkbox = $( '[name=wp' + preference + ']' );

		// Extensions might hide their preferences late or by a different method
		if ( !$checkbox.length ) {
			continue;
		}

		featuresModel[ preference ].widget = OO.ui.infuse( $checkbox.parent() );

		blacklist = featuresModel[ preference ].blacklist;

		// Browser not compatible
		if ( blacklist && $.client.test( blacklist, null, true ) ) {
			featuresModel[ preference ].widget.$element
				.closest( '.mw-ui-feature-field' )
				.find( '.mw-ui-feature-requirements-browser' ).show();
		}
	}
} );
