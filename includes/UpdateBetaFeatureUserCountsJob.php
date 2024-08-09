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
 * Job to update BetaFeatures user counts
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GPL-2.0-or-later
 */

namespace MediaWiki\Extension\BetaFeatures;

use Job;
use Wikimedia\Rdbms\IConnectionProvider;

class UpdateBetaFeatureUserCountsJob extends Job {
	private IConnectionProvider $dbProvider;

	/** @inheritDoc */
	public function __construct(
		array $params,
		IConnectionProvider $dbProvider
	) {
		parent::__construct( 'updateBetaFeaturesUserCounts', $params );
		$this->dbProvider = $dbProvider;
		$this->removeDuplicates = true;
	}

	/**
	 * Execute the job
	 *
	 * @return bool
	 */
	public function run() {
		$dbw = $this->dbProvider->getPrimaryDatabase();

		$res = $dbw->newSelectQueryBuilder()
			->select( [
				'number' => 'COUNT(up_property)',
				'feature' => 'up_property'
			] )
			->from( 'user_properties' )
			->where( [
				// Database would convert true to '1'
				'up_value' => '1',
				'up_property' => $this->params['prefs']
			] )
			->groupBy( 'up_property' )
			->caller( __METHOD__ )->fetchResultSet();

		$rows = [];
		foreach ( $res as $row ) {
			$rows[] = [
				'feature' => $row->feature,
				'number' => $row->number,
			];
		}

		// Save 0 when there are no more users in this beta feature (T362017)
		if ( count( $this->params['prefs'] ) > count( $rows ) ) {
			$updatedRows = array_map( static function ( $v ) {
				return $v['feature'];
			}, $rows );
			foreach ( array_diff( $this->params['prefs'], $updatedRows ) as $pref ) {
				$rows[] = [
					'feature' => $pref,
					'number' => 0,
				];
			}
		}

		if ( $rows ) {
			$dbw->newReplaceQueryBuilder()
				->replaceInto( 'betafeatures_user_counts' )
				->uniqueIndexFields( 'feature' )
				->rows( $rows )
				->caller( __METHOD__ )
				->execute();
		}

		return true;
	}
}
