<?php 

/*
 * http://www.tutorialspoint.com/design_pattern/builder_pattern.htm
 */

interface Item
{
	public function name();
	public function packing();
	public function price();
}
