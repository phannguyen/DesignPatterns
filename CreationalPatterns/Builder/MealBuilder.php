<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

class MealBuilder
{
	public function prepareVegMeal()
	{
		$meal = new Meal();
		$meal->addItem(new VegBurger());
		$meal->addItem(new Coke());
		return $meal;
	}
	
	public function prepareNonVegMeal()
	{
		$meal = new Meal();
		$meal->addItem(new ChickenBurger());
		$meal->addItem(new Pepsi());
		return $meal;
	}
}
