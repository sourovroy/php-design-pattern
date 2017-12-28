<?php
namespace App\Strategy;

class Init
{
	public function __construct()
	{
		$this->log('Something to log.', new LogToDatabase);
	}

	public function log($data, Logger $logger = null)
	{
		$logger = $logger ?: new LogToFile;
		$logger->log($data);
	}
}
