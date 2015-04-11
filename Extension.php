<?php

namespace Bolt\Extension\HaryMindiar\BoltWidget;

use Bolt\Application;
use Bolt\BaseExtension;
use Bolt\Extension\HaryMindiar\BoltWidget\SampleWidget;

class Extension extends BaseExtension
{   
    const CONTAINER = 'extensions.BoltWidgetExtension';

    public function isSafe()
    {
        return true;
    }

    public function initialize()
    {
        $this->app->register(new \Bolt\Extension\HaryMindiar\BoltWidget\ServiceProvider\WidgetServiceProvider($this->app));
        
        $sampleWidget = new SampleWidget($this->app['render']);

        $this->app['widgets.provider']->addWidget('sample_widget', $sampleWidget);
    	/*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            // Twig functions
            $this->app['twig']->addExtension(new \Bolt\Extension\HaryMindiar\BoltWidget\Twig\WidgetTwigExtension($this->app['widgets.provider']));
        }
    }

    public function getName()
    {
        return 'BoltWidgetExtension';
    }
}






