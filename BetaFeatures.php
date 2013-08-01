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

$wgAutoloadClasses['HTMLFeatureField'] = __DIR__ . '/includes/HTMLBetaFeatureField.php';
$wgAutoloadClasses['BetaFeaturesHooks'] = __DIR__ . '/BetaFeaturesHooks.php';
$wgAutoloadClasses['SpecialBetaFeatures'] = __DIR__ . '/SpecialBetaFeatures.php';
$wgAutoloadClasses['BetaFeatures'] = __DIR__ . '/includes/BetaFeaturesUtil.php';

$wgExtensionMessagesFiles['BetaFeatures'] = __DIR__ . '/BetaFeatures.i18n.php';
$wgExtensionMessagesFiles[ 'BetaFeaturesAlias' ] = __DIR__ . '/BetaFeatures.alias.php';

$wgSpecialPages['BetaFeatures'] = 'SpecialBetaFeatures';

$wgHooks['GetPreferences'][] = 'BetaFeaturesHooks::getPreferences';
$wgHooks['PersonalUrls'][] = 'BetaFeaturesHooks::getBetaFeaturesLink';

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'BetaFeatures',
	'descriptionmsg' => 'betafeatures-desc',
	'version' => '0.1',
	'author' => array(
		'MarkTraceur (Mark Holmquist)',
	),
	'url' => 'https://mediawiki.org/wiki/Extension:BetaFeatures',
);

$wgResourceModules['ext.betaFeatures'] = array(
	'styles' => array(
		'css/betafeatures.css',
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'BetaFeatures',
);
