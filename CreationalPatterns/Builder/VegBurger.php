<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */
 
class VegBurger extends Burger
{
	public function price()
	{
		return 50.5;
	}
	public function name()
	{
		return "Veg Burger";
	}
}
