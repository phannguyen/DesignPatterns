<?php
/*
 * http://www.tutorialspoint.com/design_pattern/factory_pattern.htm
 */

function __autoload($class_name) {
    include $class_name . '.php';
}

$shapeFactory = new ShapeFactory();

//get an object of Circle and call its draw method.
$shape1 = $shapeFactory->getShape("CIRCLE");
//call draw method of Circle
echo $shape1->draw()."<br>";

//get an object of Rectangle and call its draw method.
$shape2 = $shapeFactory->getShape("RECTANGLE");
//call draw method of Rectangle
echo $shape2->draw()."<br>";

//get an object of Square and call its draw method.
$shape3 = $shapeFactory->getShape("SQUARE");
//call draw method of Square
echo $shape3->draw()."<br>";

?>
