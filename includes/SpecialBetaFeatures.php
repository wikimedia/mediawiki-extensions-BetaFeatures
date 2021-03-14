<?php

namespace MediaWiki\Extension\BetaFeatures;

use RedirectSpecialPage;
use SpecialPage;
use Title;

/**
 * @codeCoverageIgnore
 */
class SpecialBetaFeatures extends RedirectSpecialPage {
	public function __construct() {
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
