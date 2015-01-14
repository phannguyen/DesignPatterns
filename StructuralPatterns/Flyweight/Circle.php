<?php

/*
 * http://www.tutorialspoint.com/design_pattern/flyweight_pattern.htm
 */

class Circle implements Shape
{
	private $color;
	private $x;
	private $y;
	private $radius;
	
	public function __construct($color)
	{
		$this->color = $color;
	}
	public function setX($x)
	{
		$this->x = $x;
	}
	public function setY($y)
	{
		$this->y = $y;
	}
	public function setRadius($radius)
	{
		$this->radius = $radius;
	}
	public function draw()
	{
		echo "Circle: Draw() [Color : " . $this->color .
		", x : " . $this->x .", y :" . $this->y .", radius :" . $this->radius ."<br>";
	}
}
?>
