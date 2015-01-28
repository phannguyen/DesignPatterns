<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

interface ComputerPartVisitor
{
	public function visit(Computer $computer);
	public function visit(Mouse $mouse);
	public function visit(Keyboard $keyboard);
	public function visit(Monitor $monitor);
}
?>
