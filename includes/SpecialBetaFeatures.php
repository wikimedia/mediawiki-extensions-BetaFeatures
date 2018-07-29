<?php

/**
 * @codeCoverageIgnore
 */
class SpecialBetaFeatures extends RedirectSpecialPage {
	function __construct() {
		parent::__construct( 'BetaFeatures' );
	}

	/**
	 * @param string|null $subpage
	 * @return Title Always a redirect to [[Special:Preferences#mw-prefsection-betafeatures]]
	 */
	public function getRedirect( $subpage ) {
		return SpecialPage::getTitleFor( 'Preferences', false, 'mw-prefsection-betafeatures' );
	}
}
