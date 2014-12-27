<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */

class Circle extends Shape
{
	public function __construct()
	{
		$this->type = "Circle";
	}
	
	public function draw()
	{
		echo "Inside Circle::draw() method.";
	}
}
