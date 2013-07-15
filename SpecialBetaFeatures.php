<?php
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
 * @file
 * @ingroup extensions
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @copyright Copyright © 2013, Mark Holmquist
 */

class SpecialBetaFeatures extends SpecialPage {

	function __construct() {
		parent::__construct( 'BetaFeatures' );
	}

	static function getBetaOptions( $context ) {
		global $wgUser;

		$betaOpts = array();

		wfRunHooks( 'GetBetaFeaturePreferences', array( $wgUser, &$betaOpts ) );

		foreach ( $betaOpts as $label => $opt ) {
			$betaOpts[$label]['type'] = 'checkbox';
		}

		$betaOpts['enable-all-beta'] = array(
			'type' => 'checkbox',
			'label-message' => 'betafeatures-enable-all',
		);

		return $betaOpts;
	}

	function execute( $par ) {
		$user = $this->getUser();
		$out = $this->getOutput();
		$betaOpts = $this->getBetaOptions( $out );
		$formFields = array();

		foreach ( $betaOpts as $label => $opt ) {
			$formFields[$label] = array(
				'label' => $this->msg( $opt['label-message'] )->escaped(),
				'class' => 'HTMLBetaFeatureField',
				'id' => 'checkbox-for-' . $label,
				'default' => $user->getOption( 'beta-feature-' . $label ),
			);
		}

		$this->setHeaders();

		$form = new HTMLForm( $formFields );
		$form->setSubmitCallback( array( $this, 'processInput' ) );
		$form->setTitle( $this->getTitle() );
		$form->show();
	}

	function processInput( $data ) {
		global $wgUser;

		$opts = self::getBetaOptions( $this->getOutput() );
		$enableAll = $data['enable-all-beta'];

		foreach ( $data as $name => $val ) {
			if ( $enableAll ) {
				$val = true;
			}

			$wgUser->setOption( 'beta-feature-' . $name, $val );
		}

		$wgUser->saveSettings();

		return true;
	}
}
