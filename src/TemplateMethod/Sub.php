<?php
namespace App\TemplateMethod;

abstract class Sub
{
	public function make()
	{
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryToppings()
			->addSauces();
	}

	protected function layBread()
	{
		print 'Laying down the bread <br>';
		return $this;
	}

	protected function addLettuce()
	{
		print 'add some lettuce <br>';
		return $this;
	}

	protected function addSauces()
	{
		print 'mix with sauces <br>';
		return $this;
	}

	protected abstract function addPrimaryToppings();
}
