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
        $this->app['widget.sample'] = $this->app->share(
            function (Application $app) {
                $sampleWidget = new SampleWidget($app['twig']);

                return $sampleWidget;
            }
        );
        
    	/*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            // Twig functions
            $this->app['twig']->addExtension(new \HaryMindiar\Bolt\Widget\Twig\WidgetTwigExtension($this->app));
        }
    }

    public function getName()
    {
        return 'BoltWidgetExtension';
    }
}






