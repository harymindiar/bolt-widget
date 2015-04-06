<?php

namespace HaryMindiar\Bolt\Widget\Twig;

use Silex\Application;
use HaryMindiar\Bolt\Widget\Extension;

class WidgetTwigExtension extends \Twig_Extension
{
    private $widgets;

    private $twig = null;

    public function __construct(Widgets $widgets)
    {
        $this->widgets = $widgets;
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
            'render_widget' => new \Twig_Function_Method($this, 'buildWidget')
        );
    }

    public function buildWidget($serviceWidgetName)
    {
        // do some fun stuff here
    }
}
