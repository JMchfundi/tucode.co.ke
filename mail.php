<?php

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

//getting user data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
//Recipient email
$mailTo = 'info@tucode.co.ke';
 
//email subject
$subject = ' A New Message Received From ' .$name;
 
//email message body

$htmlContent = "You have been contacted by
    $name" . PHP_EOL . PHP_EOL . "The message reads:" 
  . PHP_EOL . PHP_EOL . " $message ";
$msg = wordwrap( $htmlContent, 70 );
 
//header for sender info
$headers = "From: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

//PHP mailer function 
 	if(mail($mailTo, $subject, $msg, $headers)) {

		// Email has sent successfully, echo a success page.
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h1>Email Sent Successfully.</h1>";
		echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
		echo "</div>";
		echo "</fieldset>";

		header("Refresh:3; url=index.php");

	} else {
		echo 'ERROR! We Have Contacted Our Tech Team on This Cause & All Shall Be Resolved ASAP';
		header("Refresh:3; url=index.php");
	} 
?>
