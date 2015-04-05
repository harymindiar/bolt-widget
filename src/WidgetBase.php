<?php

namespace HaryMindiar\Bolt\Widget;

abstract class WidgetBase implements WidgetInterface
{
	protected $templateEngine;

	public function __construct($templateEngine)
	{
		$this->templateEngine = $templateEngine;
	}
}