<?php

/*
 * http://www.tutorialspoint.com/design_pattern/strategy_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$context = new Context(new OperationAdd());
echo "10 + 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new OperationSubstract());
echo "10 - 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new OperationMultiply());	
echo "10 * 5 = " . $context->executeStrategy(10, 5) . "<br>";

?>
