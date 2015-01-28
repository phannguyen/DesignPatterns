<?php
/*
 * http://www.tutorialspoint.com/design_pattern/chain_of_responsibility_pattern.htm
 */

class ErrorLogger extends AbstractLogger
{
	public function __construct($level)
	{
		$this->level = $level;
	}
	
	protected function write($message)
	{
		echo "Error Console::Logger: " . $message . "<br>";
	}
}

?>
