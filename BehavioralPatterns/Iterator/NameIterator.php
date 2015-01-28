<?php
/*
 * http://www.tutorialspoint.com/design_pattern/iterator_pattern.htm
 */

class NameIterator implements MyIterator
{
	private $names;
	private $index = 0;
	
	public function __construct($names)
	{
		$this->index = 0;
		$this->names = $names;
	}
	public function hasNext()
	{
		if ($this->index < count($this->names)) {
			return true;
		}
		return false;
	}
	public function next()
	{
		if($this->hasNext()) {
			return $this->names[$this->index++];
		}
	}
}
?>
