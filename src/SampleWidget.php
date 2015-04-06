<?php

namespace HaryMindiar\Bolt\Widget;

use HaryMindiar\Bolt\Widget\WidgetBase;

class SampleWidget extends WidgetBase
{
    public function getOutputWidget(array $arguments)
    {
    	// you need to create new template for widget
        return $this->render('widget_test.twig', []);
    }
}
