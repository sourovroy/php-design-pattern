<?php
namespace App\Adapter;

class Init
{
	public function __construct()
	{
		// Adapter pattern example with person book and kindle
		(new Person)->read(new KindleAdapter(new Kindle));
	}

}
