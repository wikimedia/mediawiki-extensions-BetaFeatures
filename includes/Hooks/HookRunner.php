<?php

namespace MediaWiki\Extension\BetaFeatures\Hooks;

use MediaWiki\HookContainer\HookContainer;
use MediaWiki\User\User;

/**
 * This is a hook runner class, see docs/Hooks.md in core.
 * @internal
 */
class HookRunner implements
	GetBetaFeaturePreferencesHook,
	GetBetaFeatureDependencyHooksHook
{
	private HookContainer $hookContainer;

	public function __construct( HookContainer $hookContainer ) {
		$this->hookContainer = $hookContainer;
	}

	/**
	 * @inheritDoc
	 */
	public function onGetBetaFeaturePreferences( User $user, array &$betaFeatures ) {
		return $this->hookContainer->run(
			'GetBetaFeaturePreferences',
			[ $user, &$betaFeatures ]
		);
	}

	/**
	 * @inheritDoc
	 */
	public function onGetBetaFeatureDependencyHooks( array &$depHooks ) {
		return $this->hookContainer->run(
			'GetBetaFeatureDependencyHooks',
			[ &$depHooks ]
		);
	}
}
