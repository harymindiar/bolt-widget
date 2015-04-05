<?php

namespace HaryMindiar\Bolt\Widget;

abstract class WidgetBase implements WidgetInterface
{
	protected $twigEnv;

	public function __construct($twigEnv)
	{
		$this->twigEnv = $twigEnv;
	}
}