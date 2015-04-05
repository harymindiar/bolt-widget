<?php

namespace Bolt\Extension\HaryMindiar\Widget;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    const EXTENSION_NAME = 'BoltWidgetExtension'

    public function initialize() {
        $this->addCss('assets/extension.css');
        $this->addJavascript('assets/start.js', true);
    }

    public function getName()
    {
        self::EXTENSION_NAME;
    }
}






