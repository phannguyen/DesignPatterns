<?php
/*
 * http://www.tutorialspoint.com/design_pattern/mediator_pattern.htm
 */

class ChatRoom
{
	public static function showMessage(User $user, $message)
	{
		echo date('l jS F Y h:i:s A') . " [" . $user->getName() . "] : " . $message ."<br>";
	}
}
?>
