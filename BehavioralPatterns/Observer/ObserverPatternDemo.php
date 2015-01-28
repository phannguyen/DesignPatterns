<?php
/*
 * http://www.tutorialspoint.com/design_pattern/observer_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$subject = new Subject();
new HexaObserver($subject);
new OctalObserver($subject);
new BinaryObserver($subject);

echo "First state change: 15" . "<br>";
$subject->setState(15);

echo "Second state change: 10" . "<br>";
$subject->setState(10);
?>

