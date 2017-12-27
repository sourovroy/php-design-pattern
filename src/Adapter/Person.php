<?php
namespace App\Adapter;

class Person
{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}

}
