<?php

declare(strict_types=1);

namespace PMVNG\PluginA;

use PMVNG\VirionAB\VirionAB;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	protected function onEnable(): void {
		VirionAB::init();
	}
}
