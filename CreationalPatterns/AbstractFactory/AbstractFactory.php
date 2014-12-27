<?php

/*
 * http://www.tutorialspoint.com/design_pattern/abstract_factory_pattern.htm
 */
 
abstract class AbstractFactory
{
	abstract function getColor($color);
	abstract function getShape($shape);
}
	
