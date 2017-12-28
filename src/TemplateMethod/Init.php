<?php
namespace App\TemplateMethod;

class Init
{
	public function __construct()
	{
		(new VeggieSub)->make();
		echo '<br>';
		(new TurkeySub)->make();
	}

}
