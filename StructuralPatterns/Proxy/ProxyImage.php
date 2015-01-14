<?php
/*
 * http://www.tutorialspoint.com/design_pattern/proxy_pattern.htm
 */

class ProxyImage implements Image
{
	private $realImage;
	private $fileName;
	
	public function __construct($fileName)
	{
		$this->fileName = $fileName;
	}
	
	public function display()
	{
		if ($this->realImage == null) {
			$this->realImage = new RealImage($this->fileName);
		}
		$this->realImage->display();
	}
}
?>
