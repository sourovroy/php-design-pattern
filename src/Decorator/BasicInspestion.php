<?php
namespace App\Decorator;

class BasicInspestion implements CarService
{
	public function getCost()
	{
		return 20;
	}

	public function getDescription()
	{
		return 'Basic car inspection';
	}
}