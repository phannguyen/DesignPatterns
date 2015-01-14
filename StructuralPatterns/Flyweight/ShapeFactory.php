<?php

/*
 * http://www.tutorialspoint.com/design_pattern/flyweight_pattern.htm
 */

class ShapeFactory
{
	private static $circleMap = array();
	
	public static function getCircle($color)
	{
		$circle = isset(self::$circleMap[$color])?self::$circleMap[$color] : null;
		
		if ($circle == null) {
			$circle = new Circle($color);
			self::$circleMap[$color] = $circle;
			echo "Creating circle of color : " . $color;
		}
		return $circle;
	}
}
?>

		
