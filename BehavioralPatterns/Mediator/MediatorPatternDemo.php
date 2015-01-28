<?php
/*
 * http://www.tutorialspoint.com/design_pattern/mediator_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$robert = new User("Robert");
$john = new User("John");

$robert->sendMessage("Hi! John!");
$john->sendMessage("Hi! Robert!");

?>
