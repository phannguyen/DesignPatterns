<?php
/*
 * http://www.tutorialspoint.com/design_pattern/composite_pattern.htm
 */

class Employee
{
	private $name;
	private $dept;
	private $salary;
	private $subordinates = array();
	
	public function __construct($name, $dept, $sal)
	{
		$this->name = $name;
		$this->dept = $dept;
		$this->salary = $sal;
		$this->subordinates = array();
	}
	
	public function add($e)
	{
		$this->subordinates[] = $e;
	}
	
	public function remove($e)
	{
		
	}
	
	public function getSubordinates()
	{
		return $this->subordinates;
	}
}
?>
