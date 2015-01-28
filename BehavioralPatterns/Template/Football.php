<?php
/*
 * http://www.tutorialspoint.com/design_pattern/template_pattern.htm
 */

class Football extends Game
{
	function endPlay()
	{
		echo "Football Game Finished!" . "<br>";
	}
	
	function initialize()
	{
		echo "Football Game Initialized! Start playing." . "<br>";
	}
	
	function startPlay()
	{
		echo "Football Game Started. Enjoy the game!" . "<br>";
	}
}
?>
