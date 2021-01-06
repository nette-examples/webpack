<?php

declare(strict_types=1);

namespace App;

use Nette\Application\Routers\RouteList;

class RouterFactory
{
	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('<presenter>/<action>', 'Homepage:default');
		return $router;
	}
}
