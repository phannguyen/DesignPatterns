<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

class Pepsi extends ColdDrink
{
	public function price()
	{
		return 35.0;
	}
	
	public function name()
	{
		return "Pepsi";
	}
}
		
