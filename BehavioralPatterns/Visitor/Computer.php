<?php
/*
 * http://www.tutorialspoint.com/design_pattern/visitor_pattern.htm
 */

class Computer implements ComputerPart
{
	private $parts;
	
	public function __construct()
	{
		$this->parts = array(new Mouse(), new Keyboard(), new Monitor());		
	}
	
	public function accept($computerPartVisitor)
	{
		$count = count($this->parts);
		for ($i = 0; $i < $count; $i++) {
			$this->parts[$i]->accept($computerPartVisitor);
		}
		$computerPartVisitor->visit($this);
	}
}
?>
		
