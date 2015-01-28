<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

interface ComputerPart
{
	public function accept($computerPartVisitor);
}
?>
