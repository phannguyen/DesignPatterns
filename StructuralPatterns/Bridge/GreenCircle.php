<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/bridge_pattern.htm
 */

class GreenCircle implements DrawAPI
{
	public function drawCircle($radius, $x, $y)
	{
		echo "Drawing Circle[ color: red, radius: $radius, x: $x, $y ]"."<br>";
	}
}
?>
