<?php
namespace App\Observer;

class Login implements LoginSubject
{
	protected $observers = [];

	public function attach($observable)
	{
		if(is_array($observable)){
			foreach($observable as $observer){
				if(! ($observable instanceof LoginObserver) )
					throw new Exception("Observer class must be instance of LoginObserver");
					
				$this->attach($observer);
			}
		}elseif($observable instanceof LoginObserver){
			$this->observers[] = $observable;
		}

		return $this;
	}

	public function detach($index)
	{
		unset($this->observers[$index]);
	}

	public function notify()
	{
		foreach($this->observers as $observer){
			$observer->handle();
		}
	}

	public function trigger()
	{
		// Perform the login functionality here
		echo "You have successfully logged in. <br>";

		$this->notify();
	}
}