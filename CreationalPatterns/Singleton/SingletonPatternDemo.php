<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/singleton_pattern.htm
 */
 
function __autoload($class_name) {
    include $class_name . '.php';
}

$object = SingleObject::getInstance();
var_dump($object);

$object1 = SingleObject::getInstance();
var_dump($object1);

$object2 = SingleObject::getInstance();
var_dump($object2);

$object->showMessage();

?>
