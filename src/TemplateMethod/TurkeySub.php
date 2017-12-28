<?php
namespace App\TemplateMethod;

class TurkeySub extends Sub
{

	public function addPrimaryToppings()
	{
		print 'add some turkey <br>';
		return $this;
	}

}
