<?php
/*
 * http://www.tutorialspoint.com/design_pattern/interpreter_pattern.htm
 */

class TerminalExpression implements Expression
{
	private $data;
	
	public function __construct($data)
	{
		$this->data = $data;
	}
	
	public function interpret($context)
	{	
		if (strpos($context, $this->data) !== false) {
			return true;
		}
		return false;
	}
}
?>
