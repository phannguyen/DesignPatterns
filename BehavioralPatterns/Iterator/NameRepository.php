<?php
/*
 * http://www.tutorialspoint.com/design_pattern/iterator_pattern.htm
 */

class NameRepository implements Container
{
	public $names = array("Robert" , "John" ,"Julie" , "Lora");
	
	public function getIterator()
	{	
		$abc = new NameIterator($this->names);	//print_r($abc);
		return $abc;
	}
}
?>
	
