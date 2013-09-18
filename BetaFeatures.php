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

$wgAutoloadClasses['BetaFeaturesHooks'] = __DIR__ . '/BetaFeaturesHooks.php';
$wgAutoloadClasses['NewHTMLCheckField'] = __DIR__ . '/includes/NewHTMLCheckField.php';
$wgAutoloadClasses['HTMLFeatureField'] = __DIR__ . '/includes/HTMLFeatureField.php';
$wgAutoloadClasses['BetaFeatures'] = __DIR__ . '/includes/BetaFeaturesUtil.php';
$wgAutoloadClasses['UpdateBetaFeatureUserCountsJob'] = __DIR__ . '/includes/UpdateBetaFeatureUserCountsJob.php';

$wgExtensionMessagesFiles['BetaFeatures'] = __DIR__ . '/BetaFeatures.i18n.php';

$wgHooks['UserSaveOptions'][] = 'BetaFeaturesHooks::updateUserCounts';
$wgHooks['GetBetaFeaturePreferences'] = array();
$wgHooks['GetBetaFeatureDependencyHooks'] = array();
$wgHooks['GetPreferences'][] = 'BetaFeaturesHooks::getPreferences';
$wgHooks['PersonalUrls'][] = 'BetaFeaturesHooks::getBetaFeaturesLink';
$wgHooks['GetBetaFeaturePreferences'][] = 'BetaFeaturesHooks::getAutoEnrollPreference';
$wgHooks['UnitTestsList'][] = 'BetaFeaturesHooks::getUnitTestsList';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'BetaFeaturesHooks::getSchemaUpdates';

$wgJobClasses['updateBetaFeaturesUserCounts'] = 'UpdateBetaFeatureUserCountsJob';

$moduleInfo = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'BetaFeatures',
);

$wgResourceModules['ext.betaFeatures'] = array(
	'scripts' => array(
		'js/mediawiki.ui.checkbox.js',
	),

	'styles' => array(
		'css/betafeatures.css',
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
	'url' => 'https://mediawiki.org/wiki/Extension:BetaFeatures',
);
