<?php

namespace HaryMindiar\Bolt\Widget\Twig;

use Silex\Application;
use HaryMindiar\Bolt\Widget\Extension;

class WidgetTwigExtension extends \Twig_Extension
{
    private $app;

    private $config;

    private $twig = null;

    public function __construct(Application $app)
    {
        $this->app      = $app;
        $this->config   = $this->app[Extension::CONTAINER]->config;
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->twig = $environment;
    }

    public function getName()
    {
        return 'boltwidget';
    }

    public function getFunctions()
    {
        return array(
            'boltwidget' => new \Twig_Function_Method($this, 'boltWidget')
        );
    }

    public function boltWidget($serviceWidgetName, $cached = false, $ttl = 600)
    {
        return new \Twig_Markup("<p><strong>Hello!</strong></p>", 'UTF-8');
    }
}