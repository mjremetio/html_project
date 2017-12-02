<?php
include ( "NexmoMessage.php" );

    $msg = $_POST['sms'];
	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('668d8e41', '016eb8524c0cd13d');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+639265006447', 'CECO_App', $msg );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);
    ?>
<html>
    <body>
    <h1>    Message successfully sent!</h1>
    </body>
</html>
