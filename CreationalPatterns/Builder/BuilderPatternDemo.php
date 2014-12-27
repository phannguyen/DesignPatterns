<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */
 
function __autoload($class_name) {
	include $class_name . ".php";
}

$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
echo "Veg Meal"."<br>";
$vegMeal->showItems();
echo "<br>";
echo "Total cost: ".$vegMeal->getCost()."<br>";

$nonVegMeal= $mealBuilder->prepareNonVegMeal();
echo "Non-Veg Meal"."<br>";
$nonVegMeal->showItems();
echo "<br>";
echo "Total cost: ".$nonVegMeal->getCost()."<br>";
