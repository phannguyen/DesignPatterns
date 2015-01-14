<?php
/*
 * http://www.tutorialspoint.com/design_pattern/facade_pattern.htm
 */
 
function __autoload($class_name) {
	include $class_name.".php";
}

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawRectangle();
$shapeMaker->drawSquare();
?>
