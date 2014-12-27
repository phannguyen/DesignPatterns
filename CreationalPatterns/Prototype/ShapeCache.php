<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */

class ShapeCache {
	
	private static $shapeMap = array();
	
	public static function getSphape($shapeId)
	{
		$cachedShape = self::$shapeMap[$shapeId];
		return clone $cachedShape;
	}
	
	public static function loadCache()
	{
		$circle = new Circle();
		$circle->setId(1);
		self::$shapeMap[$circle->getId()] = $circle;
		
		$square = new Square();
		$square->setId(2);
		self::$shapeMap[$square->getId()] = $square;
		
		$rectangle = new Rectangle();
		$rectangle->setId(3);
		self::$shapeMap[$rectangle->getId()] = $rectangle;
	}
}
