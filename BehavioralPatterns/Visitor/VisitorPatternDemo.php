<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$computer = new ComputerPartDisplayVisitor();
$computer->visit(new Computer());
//$computer->accept(new ComputerPartDisplayVisitor());
?>
