<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

class Bottle implements Packing
{
	public function pack()
	{
		return "Bottle";
	}
}
