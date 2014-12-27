<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */
 
abstract class Burger implements Item
{
	public function packing()
	{
		return new Wrapper();
	}
	
	abstract function price();
}
