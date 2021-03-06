<?php
/*
 * http://www.tutorialspoint.com/design_pattern/command_pattern.htm
 */

class SellStock implements Order
{
	private $abcStock;
	
	public function __construct($abcStock)
	{
		$this->abcStock = $abcStock;
	}
	
	public function execute()
	{
		$this->abcStock->sell();
	}
}
?>
