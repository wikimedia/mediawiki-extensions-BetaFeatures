<?php

namespace MediaWiki\Extension\BetaFeatures;

use MediaWiki\Installer\DatabaseUpdater;
use MediaWiki\Installer\Hook\LoadExtensionSchemaUpdatesHook;

class SchemaHooks implements
	LoadExtensionSchemaUpdatesHook
{

	/**
	 * @param DatabaseUpdater $updater
	 */
	public function onLoadExtensionSchemaUpdates( $updater ) {
		$dbType = $updater->getDB()->getType();

		if ( $dbType === 'mysql' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/tables-generated.sql'
			);
		} elseif ( $dbType === 'sqlite' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/sqlite/tables-generated.sql'
			);
		} elseif ( $dbType === 'postgres' ) {
			$updater->addExtensionTable( 'betafeatures_user_counts',
				dirname( __DIR__ ) . '/sql/postgres/tables-generated.sql'
			);
		}
	}

}
