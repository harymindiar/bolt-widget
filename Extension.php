<?php

namespace HaryMindiar\Bolt\Widget;

use Bolt\Application;
use Bolt\BaseExtension;
use HaryMindiar\Bolt\Widget\SampleWidget;

class Extension extends BaseExtension
{   
    const CONTAINER = 'extensions.BoltWidgetExtension';

    public function isSafe()
    {
        return true;
    }

    public function initialize()
    {
        $this->app->register(new \HaryMindiar\Bolt\Widget\ServiceProvider\WidgetServiceProvider($this->app));
        
        $sampleWidget = new SampleWidget($this->app['render']);

        $this->app['widgets.provider']->addWidget('sample_widget', $sampleWidget);
    	/*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            // Twig functions
            $this->app['twig']->addExtension(new \HaryMindiar\Bolt\Widget\Twig\WidgetTwigExtension($this->app['widgets.provider']));
        }
    }

    public function getName()
    {
        return 'BoltWidgetExtension';
    }
}






