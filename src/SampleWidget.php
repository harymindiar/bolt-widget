<?php

namespace Bolt\Extension\HaryMindiar\BoltWidget;

use Bolt\Extension\HaryMindiar\BoltWidget\WidgetBase;

class SampleWidget extends WidgetBase
{
    public function getOutputWidget(array $arguments)
    {
    	// you need to create new template for widget
        return $this->render('widget_test.twig', []);
    }
}
