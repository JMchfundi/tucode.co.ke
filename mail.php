<?php
//getting user data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
//Recipient email
$mailTo = 'directors@tucode.co.ke';
 
//email subject
$subject = ' A New Message Received From ' .$name;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Name: </b> '.$name .'</p>
<p> <b>Email: </b> '.$email .'</p>
<p> <b>Message: </b> '.$message .'</p>';

$msg = wordwrap( $htmlContent, 70 );
 
//header for sender info
$headers = "From: " .$email. ";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
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
