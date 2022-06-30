<?php
		//getting user data
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		//Recipient email
		$mailTo = 'directors@tucode.co.ke';
		
		//email subject
		$subject = ' A New Message Received From ' .$firstName;
		
		//email message body
		$formContent = '<h2> Email Request Received </h2>
		<p> <b>Client Name: </b> '.$firstName . " " . $lastName . '</p>
		<p> <b>Name: </b> '.$name .'</p>
		<p> <b>Email: </b> '.$email .'</p>
		<p> <b>Message: </b> '.$message .'</p>';
		
		//header for sender info
		$headers = "From: " .$name . "<". $email . ">";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		
		//PHP mailer function
		$status = mail($mailTo, $subject, $formContent, $headers);
		
		//error checking
		if($status) {
			$success = "The message was sent successfully!";
		} else {
			$failed = "Error: Message was not sent, Try again Later";
		}	
?>