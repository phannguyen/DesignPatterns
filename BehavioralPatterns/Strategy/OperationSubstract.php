<?php

/*
 * http://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */

class OperationSubstract implements Strategy
{
	public function doOperation($num1, $num2)
	{
		return $num1 - $num2;
	}
}
?>
