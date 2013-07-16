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
 */

/**
 * English
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 */
$messages['en'] = array(
	'betafeatures' => 'Beta Features',
	'betafetaures-intro' => "On this page you can enable or disable features on this wiki that are still in beta. These features may not work as well as you're used to, so enable at your own risk!",
	'betafeatures-enable-all' => 'Enable all beta features',
	'betafeatures-extension-description' => 'This extension lets you enable or disable features on the wiki that are still not ready for prime-time. It adds a hook and a special page to accomplish this.',
	'betafeatures-enable-all-desc' => 'If you enable this choice, all of the preferences on this page, regardless of their actual value, will be set to true in the database. Use with caution!',
);

/**
 * Message documentation
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 */
$messages['qqq'] = array(
	'betafeatures' => 'Label for the special page where beta features can be enabled.',
	'betafeatures-intro' => 'The text at the top of Special:BetaFeatures that explains the function of it.',
	'betafeatures-enable-all' => 'Label for a checkbox that enables all beta features on the wiki',
	'betafeatures-extension-description' => 'Description of the extension for Special:Version',
	'betafeatures-enable-all-desc' => 'Description for the enable-all beta preference.',
);
