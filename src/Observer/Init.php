<?php
namespace App\Observer;

class Init
{
	public function __construct()
	{
		$login = new Login();

		// $login->attach(new DBLogHandler)
		// 	->attach(new EmailNotifier);

		$login->attach(
			"dfg",
			new EmailNotifier
		);

		$login->trigger();
	}

}