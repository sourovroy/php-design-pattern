<?php
namespace App\TemplateMethod;

class VeggieSub extends Sub
{

	public function addPrimaryToppings()
	{
		print 'add some veggies <br>';
		return $this;
	}

}
