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
 * @license GPL-2.0-or-later
 */

namespace MediaWiki\Extension\BetaFeatures;

use ApiQueryBase;
use Hooks as MWHooks;
use User;

class ApiQueryBetaFeatures extends ApiQueryBase {
	/** @inheritDoc */
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'bf' );
	}

	public function execute() {
		$params = $this->extractRequestParams();

		$prefs = $this->getConfig()->get( 'BetaFeatures' );
		$user = User::newFromName( 'MediaWiki default' );
		MWHooks::run( 'GetBetaFeaturePreferences', [ $user, &$prefs ] );

		$counts = isset( $params['counts'] )
			? Hooks::getUserCounts( array_keys( $prefs ) )
			: [];
		foreach ( $prefs as $key => $info ) {
			$path = [ 'query', $this->getModuleName(), $key ];
			$this->getResult()->addValue(
				$path,
				'name',
				$key
			);
			if ( isset( $counts[$key] ) ) {
				$count = (int)$counts[$key];
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

	/** @inheritDoc */
	public function getAllowedParams() {
		return [
			'counts' => null,
		];
	}

	/**
	 * @see ApiBase::getExamplesMessages()
	 * @return array
	 */
	protected function getExamplesMessages() {
		return [
			'action=query&list=betafeatures&bfcounts='
				=> 'apihelp-query+betafeatures-example-1',
		];
	}

	/** @inheritDoc */
	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/Special:MyLanguage/Extension:BetaFeatures';
	}
}
