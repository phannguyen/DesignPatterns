<?php
/*
 * http://www.tutorialspoint.com/design_pattern/template_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$game = new Cricket();
$game->play();
echo "<br>";
$game = new Football();
$game->play();

?>
