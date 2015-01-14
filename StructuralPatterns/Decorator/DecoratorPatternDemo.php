<?php
/*
 * http://www.tutorialspoint.com/design_pattern/decorator_pattern.htm
 */

function __autoload($class_name) {
	include $class_name.".php";
}

$circle = new Circle();
$redCircle = new RedShapeDecorator(new Circle());
$redRectangle = new RedShapeDecorator(new Rectangle());

echo "Circle with normal border"."<br>";
$circle->draw();

echo "<br>"."Circle of red border"."<br>";
$redCircle->draw();

echo "<br>"."Rectangle of red border"."<br>";
$redRectangle->draw();

?>

