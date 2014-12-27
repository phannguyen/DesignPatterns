<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */

class Square extends Shape
{
	public function __construct()
	{
		$this->type = "Square";
	}
	public function draw()
	{
		echo "Inside Square::draw() method.";
	}
}
