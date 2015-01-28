<?php
/*
 * http://www.tutorialspoint.com/design_pattern/command_pattern.htm
 */

class Stock
{
	private $name = "ABC";
	private $quantity = 10;
	
	public function buy()
	{
		echo "Stock [ Name: " . $this->name .
		"Quantity: " . $this->quantity ." ] bought" . "<br>";
	}
	
	public function sell()
	{
		echo "Stock [ Name: " . $this->name ."
		Quantity: " . $this->quantity ." ] sold" . "<br>";
	}
}

?>
