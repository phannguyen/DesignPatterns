<?php

/*
 * http://www.tutorialspoint.com/design_pattern/singleton_pattern.htm
 */

class SingleObject
{
	//create an object of SingleObject
	private static $instance = null;
	
	//make the constructor private so that this class cannot be
    //instantiated
	private function __construct() {
    }
	
	public static function getInstance()
	{
		if (null === self::$instance) {
			self::$instance = new SingleObject();
			echo "Singleton here....";
		}
		return self::$instance;
	}
	
	public function showMessage()
	{
		echo "Hello World!";
	}
}
	
