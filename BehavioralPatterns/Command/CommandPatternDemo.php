<?php
/*
 * http://www.tutorialspoint.com/design_pattern/command_pattern.htm
 */
function __autoload($class_name) {
	include $class_name . ".php";
}

$abcStock = new Stock();
$buyStockOrder = new BuyStock($abcStock);
$sellStockOrder = new SellStock($abcStock);

$broker = new Broker();
$broker->takeOrder($buyStockOrder);
$broker->takeOrder($sellStockOrder);

$broker->placeOrders();
?>
