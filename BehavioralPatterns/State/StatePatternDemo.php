<?php
/*
 * http://www.tutorialspoint.com/design_pattern/state_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$context = new Context();

$startState = new StartState();
$startState->doAction($context);

echo $context->getState()->toString() . "<br>";

$stopStart = new StopState();
$stopStart->doAction($context);

echo $context->getState()->toString() . "<br>";

?>
