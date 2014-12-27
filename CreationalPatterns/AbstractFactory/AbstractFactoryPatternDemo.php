<?php
/*
 * http://www.tutorialspoint.com/design_pattern/factory_pattern.htm
 */

function __autoload($class_name) {
    include $class_name . '.php';
}

//get shape factory
$shapeFactory = FactoryProducer::getFactory("SHAPE");
//get an object of Circle and call its draw method.
$shape1 = $shapeFactory->getShape("CIRCLE");
//call draw method of Circle
$shape1->draw();

//get an object of Rectangle and call its draw method.
$shape2 = $shapeFactory->getShape("RECTANGLE");
//call draw method of Rectangle
$shape2->draw();

//get an object of Square and call its draw method.
$shape3 = $shapeFactory->getShape("SQUARE");
//call draw method of Square
$shape3->draw();

//get color factory
$colorFactory = FactoryProducer::getFactory("COLOR");
//get an object of Color Red
$color1 = $colorFactory->getColor("RED");
//call fill method of Red
$color1->fill();
//get an object of Color Green
$color2 = $colorFactory->getColor("GREEN");
//call fill method of Green
$color2->fill();
//get an object of Color Blue
$color3 = $colorFactory->getColor("BLUE");
//call fill method of Color Blue
$color3->fill();
?>
