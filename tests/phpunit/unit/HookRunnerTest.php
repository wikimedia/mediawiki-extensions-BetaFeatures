<?php

namespace MediaWiki\Extension\BetaFeatures\Tests\Unit;

use MediaWiki\Extension\BetaFeatures\Hooks\HookRunner;
use MediaWiki\Tests\HookContainer\HookRunnerTestBase;

/**
 * @covers \MediaWiki\Extension\BetaFeatures\Hooks\HookRunner
 */
class HookRunnerTest extends HookRunnerTestBase {

	public static function provideHookRunners() {
		yield HookRunner::class => [ HookRunner::class ];
	}
}
