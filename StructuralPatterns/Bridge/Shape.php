<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/bridge_pattern.htm
 */

abstract class Shape
{
	protected $drawAPI;
	protected function __construct($drawAPI)
	{
		$this->drawAPI = $drawAPI;
	}
	public abstract function draw();
	
}
?>
	
