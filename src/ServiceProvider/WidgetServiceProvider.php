<?php

namespace HaryMindiar\Bolt\Widget\ServiceProvider;

use Silex\ServiceProviderInterface;
use Silex\Application;
use HaryMindiar\Bolt\Widget\ServiceProvider\Widgets;

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