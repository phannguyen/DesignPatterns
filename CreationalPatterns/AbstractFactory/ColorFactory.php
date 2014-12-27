<?php
/*
 * http://www.tutorialspoint.com/design_pattern/factory_pattern.htm
 */

class ColorFactory extends AbstractFactory
{
	function getShape($shapeType)
	{
		return "";
	}
	public function getColor($color)
	{
		if ($color == '') {
			return "";
		}
		
		if ($color === "RED") {
			return new Red();
		}
		else if ($color === "GREEN") {
			return new Green();
		}
		else if ($color === "BLUE") {
			return new Blue();
		}
		return "";
	}
}
		
