<?php

namespace MediaWiki\Extension\BetaFeatures;

use MediaWiki\Title\Title;
use RedirectSpecialPage;
use SpecialPage;

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
