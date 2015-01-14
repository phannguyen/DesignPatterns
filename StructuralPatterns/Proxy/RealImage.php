<?php
/*
 * http://www.tutorialspoint.com/design_pattern/proxy_pattern.htm
 */

class RealImage implements Image
{
	private $fileName;
	
	public function __construct($fileName)
	{
		$this->fileName = $fileName;
		$this->loadFromDisk($fileName);
	}
	
	public function display()
	{
		echo "Displaying " . $this->fileName . "<br>";
	}
	
	private function loadFromDisk($fileName)
	{
		echo "Loading " . $fileName . "<br>";
	}
}

?>
