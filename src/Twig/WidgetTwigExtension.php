<?php

namespace HaryMindiar\Bolt\Widget\Twig;

use Silex\Application;
use HaryMindiar\Bolt\Widget\ServiceProvider\Widgets;

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
        $arguments = func_get_args();
        // $arguments[0] is widget key
        $widget = $this->widgets->getWidget($arguments[0]);
        if (!$widget) {
            return;
        }

        return $widget->getOutputWidget($arguments);
    }
}
