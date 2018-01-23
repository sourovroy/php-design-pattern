<?php
namespace App\Observer;

interface LoginSubject
{
	public function attach($observable);

	public function detach($index);

	public function notify();
}