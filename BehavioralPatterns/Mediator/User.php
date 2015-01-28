<?php
/*
 * http://www.tutorialspoint.com/design_pattern/mediator_pattern.htm
 */

class User
{
	private $name;
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function sendMessage($message)
	{
		ChatRoom::showMessage($this, $message);
	}
}
?>
