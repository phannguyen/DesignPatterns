<?php

/*
 * http://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */

class Context
{
	private $strategy;
	
	public function __construct($strategy)
	{
		$this->strategy = $strategy;
	}
	
	public function executeStrategy($num1, $num2)
	{
		return $this->strategy->doOperation($num1, $num2);
	}
}
?>
