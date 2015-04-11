<?php

namespace Bolt\Extension\HaryMindiar\BoltWidget;

abstract class WidgetBase implements WidgetInterface
{
    protected $templateRenderer;

    public function __construct($templateRenderer)
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function render($templateName, $data)
    {
    	return $this->templateRenderer->render($templateName, $data);
    }
}
