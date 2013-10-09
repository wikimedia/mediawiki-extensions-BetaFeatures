( function ( mw, $ ) {
	$( function () {
		var preference, blacklist, $input, $field,
			features = mw.config.get( 'wgBetaFeaturesFeatures' );

		for ( preference in features ) {
			$input = $( '#mw-input-wp' + preference );
			$field = $input.closest( '.mw-ui-feature-field' );
			blacklist = features[preference] && features[preference].blacklist;

			// We're here so JavaScript works
			$field.find( '.mw-ui-feature-requirements-javascript' ).hide();

			if ( blacklist && $.client.test( blacklist, null, true ) ) {
				// Browser not compatible
				$field.find( '.mw-ui-feature-requirements-browser' ).show();
			}
		}
	} );
}( mediaWiki, jQuery ) );
