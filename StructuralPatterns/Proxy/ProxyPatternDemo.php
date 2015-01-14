<?php
/*
 * http://www.tutorialspoint.com/design_pattern/proxy_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

$image = new ProxyImage("test_10mb.jpg");

//image will be loaded from disk
$image->display();
echo "<br>";
//image will not be loaded from disk
$image->display();

?>
