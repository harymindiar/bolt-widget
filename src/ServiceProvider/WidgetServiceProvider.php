<?php

namespace Bolt\Extension\HaryMindiar\BoltWidget\ServiceProvider;

use Silex\ServiceProviderInterface;
use Silex\Application;
use Bolt\Extension\HaryMindiar\BoltWidget\ServiceProvider\Widgets;

class WidgetServiceProvider implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['widgets.provider'] = $app->share(
			function () {
				return new Widgets();
			}
		);
	}

	public function boot(Application $app)
	{
		
	}
}