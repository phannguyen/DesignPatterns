<?php
/*
 * http://www.tutorialspoint.com/design_pattern/state_pattern.htm
 */

class StartState implements State
{
	public function doAction($context)
	{
		echo "Player is in start state" . "<br>";
		$context->setState($this);
	}
	
	public function toString()
	{
		return "Start State";
	}
}
?>
