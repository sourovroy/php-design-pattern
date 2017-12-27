<?php
namespace App\Adapter;

class Kindle implements eReaderInterface
{
	public function turnOn()
	{
		print("<p>Turn on the kindle.</p>");
	}

	public function clickNextButton()
	{
		print("<p>Click next button of kindle.</p>");
	}

}
