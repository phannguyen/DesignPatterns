<?php
/*
 * http://www.tutorialspoint.com/design_pattern/memento_pattern.htm
 */

class CareTaker
{
	private $mementoList;
	
	public function add(Memento $state)
	{
		$this->mementoList[] = $state;
	}
	
	public function get($index)
	{
		return $this->mementoList[$index];
	}
}
?>
