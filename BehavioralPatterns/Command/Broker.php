<?php
/*
 * http://www.tutorialspoint.com/design_pattern/command_pattern.htm
 */

class Broker{
	
	private $orderList;
	
	public function takeOrder($order)
	{
		$this->orderList[] = $order;
	}
	
	public function placeOrders()
	{
		foreach ($this->orderList as $order) {
			$order->execute();
		}
		unset($this->orderList);
	}
}
?>
