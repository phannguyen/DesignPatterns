<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/adapter_pattern.htm
 */

class AudioPlayer implements MediaPlayer
{
	private $mediaAdapter;
	
	public function play($audioType,$fileName)
	{
		if ($audioType === 'mp3') {
			echo "Playing mp3 file. Name:". $fileName."<br>";
		}
		else if($audioType === 'vlc' || $audioType === 'mp4') {
			
			$this->mediaAdapter = new MediaAdapter($audioType);
			$this->mediaAdapter->play($audioType, $fileName);
		}
		else {
			echo "Invalid media. ". $audioType ." format not supported"."<br>";
		}
	}
}
?>
