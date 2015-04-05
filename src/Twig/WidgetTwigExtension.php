<?php

namespace HaryMindiar\Bolt\Widget\Twig;

use Silex\Application;

class WidgetTwigExtension extends \Twig_Extension
{
    private $app;

    private $config;

    private $twig = null;

    const TWIG_NAME_EXTENSION = 'boltwidgetextension';

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
        return selft::TWIG_NAME_EXTENSION;
    }

    public function getFunctions()
    {
        return array(
            'boltwidget' => new \Twig_Function_Method($this, 'widgetRenderer')
        );
    }

    public function widgetRenderer($serviceWidgetName, $cached = false, $ttl = 600)
    {
        return 'hello';
    }
}