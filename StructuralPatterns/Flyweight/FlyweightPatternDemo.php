<?php

/*
 * http://www.tutorialspoint.com/design_pattern/flyweight_pattern.htm
 */

function __autoload($class_name) {
	include $class_name.".php";
}

global $colors;
$colors = array("Red", "Green", "Blue", "White", "Black");

for ($i = 0; $i < 20; $i++) {
	$circle = ShapeFactory::getCircle(getRandomColor());
	$circle->setX(getRandomX());
    $circle->setY(getRandomY());
    $circle->setRadius(100);
    $circle->draw();
}

function getRandomColor()
{	
	global $colors;
	return $colors[rand(0,(count($colors))-1)];
}

function getRandomX()
{
	return rand(0,100);
}

function getRandomY()
{
	return rand(0,100);
}
?>
