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
 * BetaFeatures extension
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
 */

$wgAutoloadClasses['BetaFeaturesHooks'] = __DIR__ . '/BetaFeaturesHooks.php';
$wgAutoloadClasses['NewHTMLCheckField'] = __DIR__ . '/includes/NewHTMLCheckField.php';
$wgAutoloadClasses['HTMLFeatureField'] = __DIR__ . '/includes/HTMLFeatureField.php';
$wgAutoloadClasses['HTMLTextBlockField'] = __DIR__ . '/includes/HTMLTextBlockField.php';
$wgAutoloadClasses['HTMLHorizontalRuleField'] = __DIR__ . '/includes/HTMLHorizontalRuleField.php';
$wgAutoloadClasses['BetaFeatures'] = __DIR__ . '/includes/BetaFeaturesUtil.php';
$wgAutoloadClasses['UpdateBetaFeatureUserCountsJob'] = __DIR__ . '/includes/UpdateBetaFeatureUserCountsJob.php';
$wgAutoloadClasses['ApiQueryBetaFeatures'] = __DIR__ . '/includes/ApiListBetaFeatures.php';
$wgAutoloadClasses['SpecialBetaFeatures'] = __DIR__ . '/includes/SpecialBetaFeatures.php';

// For tests
$wgAutoloadClasses['BetaFeaturesTestCase'] = __DIR__ . '/tests/BetaFeaturesTestCase.php';

$wgAPIListModules['betafeatures'] = 'ApiQueryBetaFeatures';

$wgMessagesDirs['BetaFeatures'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['BetaFeaturesAlias'] = __DIR__ . '/BetaFeatures.alias.php';

$wgSpecialPages['BetaFeatures'] = 'SpecialBetaFeatures';

$wgHooks['UserSaveOptions'][] = 'BetaFeaturesHooks::updateUserCounts';
$wgHooks['GetPreferences'][] = 'BetaFeaturesHooks::getPreferences';
$wgHooks['PersonalUrls'][] = 'BetaFeaturesHooks::getBetaFeaturesLink';
$wgHooks['UnitTestsList'][] = 'BetaFeaturesHooks::getUnitTestsList';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'BetaFeaturesHooks::getSchemaUpdates';
$wgHooks['MakeGlobalVariablesScript'][] = 'BetaFeaturesHooks::onMakeGlobalVariablesScript';
$wgHooks['ExtensionTypes'][] = 'BetaFeaturesHooks::onExtensionTypes';

$wgJobClasses['updateBetaFeaturesUserCounts'] = 'UpdateBetaFeatureUserCountsJob';

$moduleInfo = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'BetaFeatures/resources',
);

$wgResourceModules['ext.betaFeatures'] = array(
	'scripts' => array(
		'betafeatures.js',
		'mediawiki.ui.checkbox.js',
	),
	'styles' => array(
		'betafeatures.less',
	),
	'dependencies' => array(
		'jquery.client',
	),
	'targets' => array( 'mobile', 'desktop' ),
) + $moduleInfo;

$wgResourceModules['ext.betaFeatures.popup'] = array(
	'scripts' => array(
		'ext.betaFeatures.popup.js',
	),

	'dependencies' => array(
		'jquery.tipsy',
	),

	'messages' => array(
		'betafeatures-tooltip',
	),
) + $moduleInfo;

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'BetaFeatures',
	'descriptionmsg' => 'betafeatures-desc',
	'version' => '0.1',
	'author' => array(
		'MarkTraceur (Mark Holmquist)',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:BetaFeatures',
);

/**
 * If set, a flat array of named registrant Beta Feature hooks which will be
 * loaded, with all others ignored for display of preferences purposes. Keys
 * are the relevant preferences' names.
 *
 * @var array|null Whitelist of hooks to allow
 * @example [ 'visualeditor-enable', 'betafeatures-vector-typography-update' ]
 */
$wgBetaFeaturesWhitelist = null;
