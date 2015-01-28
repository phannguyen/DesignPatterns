<?php
/*
 * http://www.tutorialspoint.com/design_pattern/state_pattern.htm
 */

class StopState implements State
{
	public function doAction($context)
	{
		echo "Player is in stop state" . "<br>";
		$context->setState($this);
	}
	
	public function toString()
	{
		return "Stop State";
	}
}
?>
