<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

class Coke extends ColdDrink
{
	public function price()
	{
		return 30.0;
	}
	
	public function name()
	{
		return "Coke";
	}
}
