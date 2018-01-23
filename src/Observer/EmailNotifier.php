<?php
namespace App\Observer;

class EmailNotifier implements LoginObserver
{
	public function handle()
	{
		// Send email to logged in user
		echo "Email has been sent with your login time. <br>";
	}
}