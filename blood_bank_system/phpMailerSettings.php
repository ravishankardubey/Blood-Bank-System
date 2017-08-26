<?php
	require 'PHPMailer/PHPMailerAutoload.php'; // TCP port to connect to
	
	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'emailid';                 // SMTP username
	$mail->Password = 'password';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;     
	$mail->isHTML(true);    // Set email format to HTML
	
	?>
