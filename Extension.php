<?php

namespace HaryMindiar\Bolt\Widget;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{   
    const CONTAINER = 'extensions.BoltWidgetExtension';

    public function isSafe()
    {
        return true;
    }

    public function initialize()
    {
        $this->app->register(new HaryMindiar\Bolt\Widget\ServiceProvider\WidgetServiceProvider($this->app));
        
    	/*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            // Twig functions
            $this->app['twig']->addExtension(new \HaryMindiar\Bolt\Widget\Twig\WidgetTwigExtension($this->app['widgets'], $this->app['cache']));
        }
    }

    public function getName()
    {
        return 'BoltWidgetExtension';
    }
}






