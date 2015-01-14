<?php
/*
 * http://www.tutorialspoint.com/design_pattern/decorator_pattern.htm
 */

abstract class ShapeDecorator implements Shape
{
	protected $decoratedShape;
	
	public function __construct($decoratedShape)
	{
		$this->decoratedShape = $decoratedShape;
	}
	
	public function draw()
	{
		$decoratedShape->draw();
	}
}
?>
