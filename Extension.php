<?php

namespace HaryMindiar\Bolt\Widget;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    const EXTENSION_NAME = 'BoltWidgetExtension';

    public function initialize()
    {
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
        self::EXTENSION_NAME;
    }
}






