<?php
namespace App\Adapter;

class Book implements BookInterface
{
	public function open()
	{
		print("<p>Open the paper book.</p>");
	}

	public function turnPage()
	{
		print("<p>Turning the paper book page.</p>");
	}

}
