<?php
namespace App\Decorator;

class Init
{
	public function __construct()
	{
		$service = new TireRotation(new OilChange(new BasicInspestion));
		
		echo 'Description: '.$service->getDescription();
		echo "\n";
		echo 'Cost: '.$service->getCost();
	}

}
