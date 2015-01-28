<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

class Mouse implements ComputerPart
{
	public function accept($computerPartVisitor)
	{
		$computerPartVisitor->visit($this);
	}
}
?>
