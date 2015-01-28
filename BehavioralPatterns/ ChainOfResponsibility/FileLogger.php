<?php
/*
 * http://www.tutorialspoint.com/design_pattern/chain_of_responsibility_pattern.htm
 */

class FileLogger extends AbstractLogger
{
	public function __construct($level)
	{
		$this->level = $level;
	}
	
	protected function write($message)
	{
		echo "File::Logger: " . $message . "<br>";
	}
}
?>
