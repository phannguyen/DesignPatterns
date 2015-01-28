<?php
/*
 * http://www.tutorialspoint.com/design_pattern/state_pattern.htm
 */

class Context
{
	private $state;
	
	public function __construct()
	{
		$this->state = null;
	}
	
	public function setState($state)
	{
		$this->state = $state;
	}
	
	public function getState()
	{
		return $this->state;
	}
}
?>
