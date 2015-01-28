<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

class ComputerPartDisplayVisitor implements ComputerPartVisitor
{
	public function visit(Computer $computer)
	{
		echo "Displaying Computer." ."<br>";
	}
	
	public function visit(Mouse $mouse)
	{
		echo "Displaying Mouse." ."<br>";
	}
	
	public function visit(Keyboard $keyboard)
	{
		echo "Displaying Keyboard." ."<br>";
	}
	
	public function visit(Monitor $monitor)
	{
		echo "Displaying Monitor." ."<br>";
	}
}
?>
