<?php
/*
 * http://www.tutorialspoint.com/design_pattern/observer_pattern.htm
 */

class BinaryObserver extends Observer
{
	public function __construct($subject)
	{
		$this->subject = $subject;
		$this->subject->attach($this);
	}
	
	public function update()
	{
		echo "Binary String: " . decbin( $this->subject->getState()) ."<br>"; 
	}
}
?>
