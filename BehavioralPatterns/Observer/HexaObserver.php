<?php
/*
 * http://www.tutorialspoint.com/design_pattern/observer_pattern.htm
 */

class HexaObserver extends Observer
{
	public function __construct($subject)
	{
		$this->subject = $subject;
		$this->subject->attach($this);
	}
	
	public function update()
	{
		echo "Binary String: " . dechex( $this->subject->getState()) ."<br>"; 
	}
}

?>
