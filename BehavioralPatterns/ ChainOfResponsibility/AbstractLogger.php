<?php
/*
 * http://www.tutorialspoint.com/design_pattern/chain_of_responsibility_pattern.htm
 */

abstract class AbstractLogger
{
	const INFO = 1;
	const DEBUG = 2;
	const ERROR = 3;
	
	protected $level;
	
	//next element in chain or responsibility
	protected $nextLogger;
	
	public function setNextLogger($nextLogger)
	{
		$this->nextLogger = $nextLogger;
	}
	
	public function logMessage($level, $message)
	{
		if ($this->level <= $level) {
			$this->write($message);
		}
		if ($this->nextLogger != null) {
			$this->nextLogger->logMessage($level,$message);
		}
	}
	
	abstract protected function write($message);
}
?>
