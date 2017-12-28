<?php
namespace App\Strategy;

class LogToDatabase implements Logger
{
	public function log($data)
	{
		print 'Log data to the database. <br>';
	}

}
