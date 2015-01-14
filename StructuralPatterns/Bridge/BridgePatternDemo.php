<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/bridge_pattern.htm
 */

function __autoload ($className) {
	include $className. ".php";
}

$redCircle = new Circle(100, 100, 10, new RedCircle());
$greenCircle = new Circle(100, 100, 10, new GreenCircle());

$redCircle->draw();
$greenCircle->draw();

?>
