<?php

namespace HaryMindiar\Bolt\Widget;

use HaryMindiar\Bolt\Widget\WidgetBase;

class SampleWidget extends WidgetBase
{
	public function __construct($twigEnv)
	{
		parent::__construct($twigEnv);
	}

	public function render($templateName, $data)
	{
		echo 'test';
	}
}