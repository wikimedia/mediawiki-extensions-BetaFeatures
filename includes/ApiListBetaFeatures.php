<?php
/**
 * Query module to list all available BetaFeatures
 *
 * @ingroup API
 * @file
 * @author Kunal Mehta <legoktm@gmail.com>
 */
class ApiQueryBetaFeatures extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'bf' );
	}

	public function execute() {
		wfProfileIn( __METHOD__ );
		$params = $this->extractRequestParams();

		$prefs = array();
		$user = User::newFromName( 'MediaWiki default' );
		wfRunHooks( 'GetBetaFeaturePreferences', array( $user, &$prefs ) );

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
				$this->getResult()->addValue(
					$path,
					'count',
					$counts[$key]
				);
			}
		}

		wfProfileOut( __METHOD__ );
	}

	public function getAllowedParams() {
		return array(
			'counts' => null,
		);
	}

	public function getParamDescription() {
		return array(
			'counts' => 'Whether to fetch how many users have enabled a certain preference.',
		);
	}

	public function getDescription() {
		return 'List all BetaFeatures';
	}


	public function getExamples() {
		return array(
			'api.php?action=query&list=betafeatures&bfcounts=' => 'Get all available betafeatures and show how many users have enabled them'
		);
	}

	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/Extension:BetaFeatures/API';
	}
}

