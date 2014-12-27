<?php
/*
 * http://www.tutorialspoint.com/design_pattern/factory_pattern.htm
 */

class ShapeFactory extends AbstractFactory
{
	public function getShape($shapeType)
	{
		if ($shapeType == '') {
			return '';
		}
		
		if ($shapeType === "CIRCLE") {
			return new Circle();
		}
		else if ($shapeType === "RECTANGLE") {
			return new Rectangle();
		}
		else if ($shapeType === "SQUARE") {
			return new Square();
		}
	}
	
	function getColor($color)
	{
		return null;
	}
} 
