<?php
/*
 * http://www.tutorialspoint.com/design_pattern/factory_pattern.htm
 */
 
class FactoryProducer
{
	public function getFactory($choice)
	{
		if ($choice === "SHAPE") {
			return new ShapeFactory();
		}
		else if ($choice === "COLOR") {
			return new ColorFactory();
		}
		return "";
	}
}
	
