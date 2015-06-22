<?php

class SpecialBetaFeatures extends RedirectSpecialPage {
	function __construct() {
		parent::__construct( 'BetaFeatures' );
	}

	public function getRedirect( $par ) {
		return SpecialPage::getTitleFor( 'Preferences', false, 'mw-prefsection-betafeatures' );
	}
}
