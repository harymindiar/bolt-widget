<?php

namespace HaryMindiar\Bolt\Widget;

use HaryMindiar\Bolt\Widget\WidgetBase;

class SampleWidget extends WidgetBase
{
    public function getOutputWidget()
    {
        return 'test';
    }
}
