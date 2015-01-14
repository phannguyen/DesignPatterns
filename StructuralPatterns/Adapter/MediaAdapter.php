<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/adapter_pattern.htm
 */

class MediaAdapter implements MediaPlayer
{
	private $advancedMusicPlayer;
	
	public function __construct($audioType)
	{
		if ($audioType === 'vlc') {
			$this->advancedMusicPlayer = new VlcPlayer();
		}
		else if ($audioType === 'mp4') {
			$this->advancedMusicPlayer = new Mp4Player();
		}
	}	
	
	public function play($audioType, $fileName)
	{
		if ($audioType === 'vlc') {
			$this->advancedMusicPlayer->playVlc($fileName);
		}
		else if ($audioType === 'mp4') {
			$this->advancedMusicPlayer->playMp4($fileName);
		}
	}
}
			
