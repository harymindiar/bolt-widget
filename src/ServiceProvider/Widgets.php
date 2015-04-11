<?php

namespace Bolt\Extension\HaryMindiar\BoltWidget\ServiceProvider;

use Bolt\Extension\HaryMindiar\BoltWidget\WidgetInterface;

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