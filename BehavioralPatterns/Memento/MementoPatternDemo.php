<?php
/*
 * http://www.tutorialspoint.com/design_pattern/memento_pattern.htm
 */
 
function __autoload($class_name) {
	include $class_name . ".php";
}
$originator = new Originator();
$careTaker = new CareTaker();

$originator->setState("State #1");
$originator->setState("State #2");
$careTaker->add($originator->saveStateToMemento());

$originator->setState("State #3");
$careTaker->add($originator->saveStateToMemento());

$originator->setState("State #4");
echo "Current State: " . $originator->getState() . "<br>";

$originator->getStateFromMemento($careTaker->get(0));
echo "First saved State: " . $originator->getState() . "<br>";
$originator->getStateFromMemento($careTaker->get(1));
echo "Second saved State: " . $originator->getState() . "<br>";
 
?>
