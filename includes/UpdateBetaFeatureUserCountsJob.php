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
 * Job to update BetaFeatures user counts
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

namespace MediaWiki\Extension\BetaFeatures;

use GenericParameterJob;
use Job;

class UpdateBetaFeatureUserCountsJob extends Job implements GenericParameterJob {
	/** @inheritDoc */
	public function __construct( array $params ) {
		parent::__construct( 'updateBetaFeaturesUserCounts', $params );

		$this->removeDuplicates = true;
	}

	/**
	 * Execute the job
	 *
	 * @return bool
	 */
	public function run() {
		$dbw = wfGetDB( DB_PRIMARY );

		$res = $dbw->select(
			'user_properties',
			[
				'number' => 'COUNT(up_property)',
				'feature' => 'up_property',
			],
			[
				'up_value' => HTMLFeatureField::OPTION_ENABLED,
				'up_property' => $this->params['prefs'],
			],
			__METHOD__,
			[
				'GROUP BY' => 'up_property',
			]
		);

		if ( !$res ) {
			return false;
		}

		$rows = [];
		foreach ( $res as $row ) {
			$rows[] = [
				'feature' => $row->feature,
				'number' => $row->number,
			];
		}

		if ( $rows ) {
			$dbw->replace(
				'betafeatures_user_counts',
				'feature',
				$rows,
				__METHOD__
			);
		}

		return true;
	}
}
