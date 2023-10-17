<?php

namespace MediaWiki\Extension\BetaFeatures\Hooks;

use MediaWiki\User\User;

/**
 * This is a hook handler interface, see docs/Hooks.md in core.
 * Use the hook name "GetBetaFeaturePreferences" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface GetBetaFeaturePreferencesHook {
	/**
	 * Allows overwriting of beta feature preferences
	 *
	 * @param User $user User the preferences are for
	 * @param array &$betaFeatures
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onGetBetaFeaturePreferences( User $user, array &$betaFeatures );
}
