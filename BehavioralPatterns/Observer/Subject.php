<?php
/*
 * http://www.tutorialspoint.com/design_pattern/observer_pattern.htm
 */

class Subject
{
	private $observers;
	private $state;
	
	public function getState()
	{
		return $this->state;
	}
	
	public function setState($state)
	{
		$this->state = $state;
		$this->notifyAllObservers();
	}
	
	public function attach($observer)
	{
		$this->observers[] = $observer;
	}
	
	public function notifyAllObservers()
	{
		foreach ($this->observers as $observer) {
			$observer->update();
		}
	}
}
?>
		
