<?php
    require 'phpMailerSettings.php';
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $name = $_GET['name'];
	$email = $_GET['email'];
    $mob = $_GET['mob'];
    $query = $_GET['query'];
    $mail->addAddress('ravi.rsdubey@gmail.com', 'Admin');
    $mail->setFrom($email, $name);
    	                   $mail->addReplyTo($email, $name);
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
			                $mail->Subject = $name .' | Query on IS Blood Bank' ;
			                $mail->Body    = '
			                        <html>
			                        <head>
			                        <title>'.$name.' | Query on IS Blood Bank </title>
			                        </head>
			                        <body>
                                    <p>To,<br>IS Blood Bank<br></p>
			                        <p>'.$query.'</p>
			                        <table>
                                    <tr><td><b>Name</b></td> <td>: '.$name.'</td></tr>
                                    <tr><td><b>Email ID</b></td> <td>: '.$email.'</td></tr>
                                    <tr><td><b>Mobile No.</b></td> <td>: '.$mob.'</td></tr>
			                        
			                        </table>
			                        </body>
			                        </html>
			                        ';
			
			                if(!$mail->send()) {
                                echo "Error: Problem in sending Query !";
                            }
                            else
                            {
                                echo "Your Query has been sent!";
                            }

?>
