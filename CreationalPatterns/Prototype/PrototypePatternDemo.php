<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */

function __autoload($class_name) {
	include $class_name.".php";
}

ShapeCache::loadCache();

$clonedShape = ShapeCache::getSphape(1);
echo "Shape:". $clonedShape->getType()."<br>";

$clonedShape2 = ShapeCache::getSphape(2);
echo "Shape:". $clonedShape2->getType()."<br>";

$clonedShape3 = ShapeCache::getSphape(3);
echo "Shape:". $clonedShape3->getType();

?>
