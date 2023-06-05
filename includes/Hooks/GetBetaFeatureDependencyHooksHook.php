<?php

namespace MediaWiki\Extension\BetaFeatures\Hooks;

/**
 * This is a hook handler interface, see docs/Hooks.md in core.
 * Use the hook name "GetBetaFeatureDependencyHooks" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface GetBetaFeatureDependencyHooksHook {
	/**
	 * Allows to define hooks running to get dependency for beta features
	 *
	 * @param array &$depHooks
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onGetBetaFeatureDependencyHooks( array &$depHooks );
}
