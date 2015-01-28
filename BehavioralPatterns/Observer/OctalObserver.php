<?php
/*
 * http://www.tutorialspoint.com/design_pattern/observer_pattern.htm
 */

class OctalObserver extends Observer
{
	public function __construct($subject)
	{
		$this->subject = $subject;
		$this->subject->attach($this);
	}
	
	public function update()
	{
		echo "Binary String: " . decoct( $this->subject->getState()) ."<br>"; 
	}
}
?>
