<?php
/*
 * http://www.tutorialspoint.com/design_pattern/iterator_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$namesRepository = new NameRepository();

for($iter = $namesRepository->getIterator(); $iter->hasNext();) {
	$name = $iter->next();
	echo "Name : " . $name . "<br>";
}
?>
