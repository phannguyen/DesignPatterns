<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/bridge_pattern.htm
 */

class Circle extends Shape
{
	private $x, $y, $radius;
	public function __construct ($x, $y, $radius,$drawAPI)
	{
		parent::__construct($drawAPI);
		$this->x = $x;
		$this->y = $y;
		$this->radius = $radius;
	}
	
	public function draw()
	{
		$this->drawAPI->drawCircle($this->radius,$this->x,$this->y);
	}
}
?>
