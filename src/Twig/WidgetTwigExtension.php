<?php

namespace HaryMindiar\Bolt\Widget\Twig;

use Silex\Application;
use HaryMindiar\Bolt\Widget\Extension;

class WidgetTwigExtension extends \Twig_Extension
{
    private $widgets;

    private $cache;

    private $twig = null;

    public function __construct(Widgets $widgets, $cache)
    {
        $this->widgets = $widgets;
        $this->cache = $cache;
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->twig = $environment;
    }

    public function getName()
    {
        return 'render_widget';
    }

    public function getFunctions()
    {
        return array(
            'render_widget' => new \Twig_Function_Method($this, 'builtWidget')
        );
    }

    public function builtWidget($serviceWidgetName, $cached = false, $ttl = 600)
    {
        return new \Twig_Markup("<p><strong>Hello!</strong></p>", 'UTF-8');
    }
}
