<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

abstract class ColdDrink implements Item
{
	public function packing()
	{
		return new Bottle();
	}
	
	abstract function price();
}
		 

