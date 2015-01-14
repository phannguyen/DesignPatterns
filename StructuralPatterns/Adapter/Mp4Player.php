<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/adapter_pattern.htm
 */

class Mp4Player implements AdvancedMediaPlayer
{
	public function playVlc($fileName)
	{
	}
	
	public function playMp4($fileName)
	{
		echo "Playing mp4 file. Name: ". $fileName."<br>";
	}
}

?>
