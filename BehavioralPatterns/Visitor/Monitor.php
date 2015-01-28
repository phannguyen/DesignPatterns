<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

class Monitor implements ComputerPart
{
	public function accept($computerPartVisitor)
	{
		$computerPartVisitor->visit($this);
	}
}
?>	
