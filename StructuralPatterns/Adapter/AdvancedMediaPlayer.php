<?php 
/*
 * http://www.tutorialspoint.com/design_pattern/adapter_pattern.htm
 */

interface AdvancedMediaPlayer
{
	public function playVlc($fileName);
	public function playMp4($fileName);
	
}
?>
