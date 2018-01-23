<?php
namespace App\Observer;

class DBLogHandler implements LoginObserver
{
	public function handle()
	{
		// Perform log database query here
		echo "Last login time saved to database. <br>";
	}
}