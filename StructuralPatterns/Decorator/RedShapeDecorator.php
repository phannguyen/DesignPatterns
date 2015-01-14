<?php
/*
 * http://www.tutorialspoint.com/design_pattern/decorator_pattern.htm
 */

class RedShapeDecorator extends ShapeDecorator
{
	public function __construct($decoratedShape)
	{
		parent::__construct($decoratedShape);
	}
	
	public function draw()
	{
		$this->decoratedShape->draw();
		$this->setRedBorder($this->decoratedShape);
	}
	private function setRedBorder($decoratedShape)
	{
		echo "Border Color: Red"."<br>";
	}
}
?>
