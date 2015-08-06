<?php
/**
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
 * Query module to list all available BetaFeatures
 *
 * @ingroup API
 * @file
 * @author Kunal Mehta <legoktm@gmail.com>
 * @license GNU General Public License version 2 or later
 */
class ApiQueryBetaFeatures extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'bf' );
	}

	public function execute() {
		global $wgBetaFeatures;

		$params = $this->extractRequestParams();

		$prefs = $wgBetaFeatures;
		$user = User::newFromName( 'MediaWiki default' );
		Hooks::run( 'GetBetaFeaturePreferences', array( $user, &$prefs ) );

		$counts = isset( $params['counts'] )
			? BetaFeaturesHooks::getUserCounts( array_keys( $prefs ) )
			: array();
		foreach ( $prefs as $key => $info ) {
			$path = array( 'query', $this->getModuleName(), $key );
			$this->getResult()->addValue(
				$path,
				'name',
				$key
			);
			if ( isset( $counts[$key] ) ) {
				$count = $counts[$key];
			} else {
				$count = 0;
			}
			$this->getResult()->addValue(
				$path,
				'count',
				$count
			);
		}
	}

	public function getAllowedParams() {
		return array(
			'counts' => null,
		);
	}

	/**
	 * @deprecated since MediaWiki core 1.25
	 */
	public function getParamDescription() {
		return array(
			'counts' => 'Whether to fetch how many users have enabled a certain preference.',
		);
	}

	/**
	 * @deprecated since MediaWiki core 1.25
	 */
	public function getDescription() {
		return 'List all BetaFeatures';
	}


	/**
	 * @deprecated since MediaWiki core 1.25
	 */
	public function getExamples() {
		return array(
			'api.php?action=query&list=betafeatures&bfcounts='
				=> 'Get all available betafeatures and show how many users have enabled them'
		);
	}

	/**
	 * @see ApiBase::getExamplesMessages()
	 */
	protected function getExamplesMessages() {
		return array(
			'action=query&list=betafeatures&bfcounts='
				=> 'apihelp-query+betafeatures-example-1',
		);
	}

	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/Extension:BetaFeatures/API';
	}
}
