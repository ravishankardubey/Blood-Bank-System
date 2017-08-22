# Blood-Bank-System
Blood Bank System Developed using PHP, HTML, CSS, JQuery, MySQL


Hello!
Following are the details which are required to run this project!

database connection
-------------------
it has been connected using connectMysql.php file.
you will have to change it accordingly to use Database.


PHPMailer
---------
change SMTP details of your account in phpMailerSettings.php file to use PHPMailer.
it is important to change email id and password in the above file in order to use Mailer.


also change following email ids if you want to change in file regExecute.php and profileModify.php

							$mail->setFrom('ravishankar.rsd@gmail.com', 'IS Blood Bank');
							$mail->addReplyTo('ravishankar.rsd@gmail.com', 'IS Blood Bank');
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
                      
                    
Don't use this project for commercial purpose.
Feel free to write at ravishankar.rsd@gmail.com
