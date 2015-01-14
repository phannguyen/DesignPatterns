<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/adapter_pattern.htm
 */

class VlcPlayer implements AdvancedMediaPlayer
{
	public function playVlc($fileName)
	{
		echo "Playing vlc file. Name: ". $fileName."<br>";
	}
	
	public function playMp4($fileName)
	{
	}
}
