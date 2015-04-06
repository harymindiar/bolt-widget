<?php

namespace HaryMindiar\Bolt\Widget\ServiceProvider;

use HaryMindiar\Bolt\Widget\WidgetInterface;

class Widgets
{
	private $listOfWidget = [];

	public function addWidget($key, WidgetInterface $widget)
	{
		$this->listOfWidget = array_merge($this->listOfWidget, [$key => $widget]);
	}

	public function getWidget($key)
	{
		if (!isset($this->listOfWidget[$key])) {
			return false;
		}

		return $this->listOfWidget[$key];
	}
}