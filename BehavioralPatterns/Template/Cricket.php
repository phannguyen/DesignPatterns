<?php
/*
 * http://www.tutorialspoint.com/design_pattern/template_pattern.htm
 */

class Cricket extends Game
{
	function endPlay()
	{
		echo "Cricket Game Finished!" . "<br>";
	}
	
	function initialize()
	{
		echo "Cricket Game Initialized! Start playing." . "<br>";
	}
	
	function startPlay()
	{
		echo "Cricket Game Started. Enjoy the game!" . "<br>";
	}
}
?>
