<?php
/*
 * http://www.tutorialspoint.com/design_pattern/template_pattern.htm
 */

abstract class Game
{
	abstract function initialize();
	abstract function startPlay();
	abstract function endPlay();
	
	//template method
	public final function play()
	{
		$this->initialize();
		$this->startPlay();
		$this->endPlay();
	}
}
?>
