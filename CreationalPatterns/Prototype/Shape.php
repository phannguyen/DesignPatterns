<?php

/*
 * http://www.tutorialspoint.com/design_pattern/prototype_pattern.htm
 */
 
abstract class Shape
{
	private $id;
	protected $type;
	
	abstract function draw();
	
	public function getType()
	{
		return $this->type;
	}
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function __clone()
	{
		
	}
}
		
	

