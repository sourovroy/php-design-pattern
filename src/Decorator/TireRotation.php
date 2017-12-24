<?php
namespace App\Decorator;

class TireRotation implements CarService
{
	protected $carService;

	public function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 12 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ' and tire rotation';
	}
}