<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */

class Rectangle extends Shape
{
	public function __construct()
	{
		$this->type = "Rectangle";
	}
	
	public function draw()
	{
		echo "Inside Rectangle::draw() method."; 
	}
}
