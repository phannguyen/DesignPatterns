<?php
/*
 * http://www.tutorialspoint.com/design_pattern/memento_pattern.htm
 */

class Memento
{
	private $state;
	
	public function __construct($state)
	{
		$this->state = $state;
	}
	
	public function getState()
	{
		return $this->state;
	}
}
?>
