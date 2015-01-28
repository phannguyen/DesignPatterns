<?php

/*
 * http://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */

class OperationAdd implements Strategy
{
	public function doOperation($num1, $num2)
	{
		return $num1 + $num2;
	}
}
?>
