<?php

// Define some constants
define( "RECIPIENT_NAME", "Contact Info" );
define( "RECIPIENT_EMAIL", "kim@woolffit.com" ); // Your mail here

// Read the form values
$success = false;

$senderEmail = $_POST['email'];
$subject = 'Message from Woolffit Website';
$message = "First name: ".$_POST['firstname']."\n";
$message .= "Last name: ".$_POST['lastname']."\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "message: ".$_POST['message']."\n";

// If all values exist, send the email
if ( $senderEmail && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, $subject, $message, $headers );

  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
