<?php 
    session_start();
    include 'connectMysql.php';
    require 'phpMailerSettings.php';
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    if(isset($_SESSION["username"]) && $_SESSION["type"]=="receiver")
    {
        $type = $_POST['type'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $blood_group = $_POST['blood_group'];
        $weight = $_POST['weight'];
        $phone = $_POST['phone'];
        $mob = $_POST['mob'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];
        $address = $_POST['add'];
        
        $query = "UPDATE receiver SET name = '$fname', dob = '$dob', gender = '$gender', blood_group = '$blood_group', weight = '$weight', phone = '$phone', mob = '$mob', city = '$city', pin = '$pin', address = '$address' where email = '$email'";
        if ($conn->query($query) === TRUE) {
                $query = "UPDATE user_details set name = '$fname' where email = '$email'";
			     if ($conn->query($query) === TRUE) {
                     
                    // after successful regitration mailing of details to users
                     
                     $mail->addAddress($email, $fname);
                     $mail->setFrom('ravishankar.rsd@gmail.com', 'IS Blood Bank');
    	                   $mail->addReplyTo('ravishankar.rsd@gmail.com', 'IS Blood Bank');
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
			                $mail->Subject = 'IS Blood Bank || Details Modified';
			                $mail->Body    = '
			                        <html>
			                        <head>
			                        <title>IS Blood Bank || Details Modified</title>
			                        </head>
			                        <body>
			                        <p>Hello <b>'.$fname.'</b>,</p>
			                        <p>You have modified your details for <b>IS Blood Bank</b> as a <b>'.$type.'</b> !</p>
			                        <p>following are your details -</p>
			                        <table>
			                        <tr><td><b>Name</b></td> <td>: '.$fname.'</td></tr>
			                        <tr><td><b>EMail ID</b></td> <td>: '.$email.'</td></tr>
			                        <tr><td><b>Date of Birth</b></td> <td>: '.$dob.'</td></tr>
			                        <tr><td><b>Gender</b></td> <td>: '.$gender.'</td></tr>
			                        <tr><td><b>Blood Group</b></td> <td>: '.$blood_group.'</td></tr>
			                        <tr><td><b>Weight (Kg.)</b></td> <td>: '.$weight.'</td></tr>
                                    <tr><td><b>Residence Phone</b></td> <td>: '.$phone.'</td></tr>
                                    <tr><td><b>Mobile</b></td> <td>: '.$mob.'</td></tr>
                                    <tr><td><b>City</b></td> <td>: '.$city.'</td></tr>
                                    <tr><td><b>Pincode</b></td> <td>: '.$pin.'</td></tr>
                                    <tr><td><b>Created At</b></td> <td>: '.$d.'</td></tr>
			                        
			                        </table>
			                        <br>
			                        <br>
			                        <b>Thank You !<br>Regards,<br>Team IS Blood Bank</b>
			                        </body>
			                        </html>
			                        ';
			
			                if(!$mail->send()) {
                                header("Location: profile.php?message=<font color='red'> Modified<br>Problem in sending Confirmation Mail<br>$conn->error</font>");
                            }
                     else{
                         header("Location: profile.php?message=<font color='green'> Modified<br>Confirmation Mail Sent <br>$conn->error</font>");
                     }
                 }
                
        }
        else
                {
                    header("Location: profile.php?message=<font color='red'> Problem in Modifying<br> $conn->error</font>");
                }
    }
    
    /* For Hospital */

    if(isset($_SESSION["username"]) && $_SESSION["type"]=="hospital")
    {
        $eee = $_SESSION["username"];
        $type = $_SESSION["type"];
        $hname = $_POST['hname'];
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mob = $_POST['mob'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];
        $address = $_POST['add'];
        
        $query = "UPDATE hospital SET hname = '$hname', cname = '$cname', phone = '$phone', mob = '$mob', city = '$city', pin = '$pin', address = '$address' where email = '$email'";
        if ($conn->query($query) === TRUE) {
                $query = "UPDATE user_details SET name = '$hname' where email = '$email'";
			     if ($conn->query($query) === TRUE) {
                     
                    // after successful regitration mailing of details to users
                     
                     $mail->addAddress($email, $fname);
                     $mail->setFrom('ravishankar.rsd@gmail.com', 'IS Blood Bank');
    	                   $mail->addReplyTo('ravishankar.rsd@gmail.com', 'IS Blood Bank');
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
			                $mail->Subject = 'IS Blood Bank || Details Modified';
			                $mail->Body    = '
			                        <html>
			                        <head>
			                        <title>IS Blood Bank || Details Modified</title>
			                        </head>
			                        <body>
			                        <p>Hello <b>'.$cname.'</b>,</p>
			                        <p>Details of <b>'.$hname.'</b> has been successfully modified for <b>IS Blood Bank</b> as a <b>'.$type.'</b> !</p>
			                        
                                    <p>following are Current Details of your Hospital -</p>
                                    <table>
			                        <tr><td><b>Hospital Name</b></td> <td>: '.$hname.'</td></tr>
			                        <tr><td><b>Contact Person</b></td> <td>: '.$cname.'</td></tr>
                                    <tr><td><b>Hospital Phone</b></td> <td>: '.$phone.'</td></tr>
                                    <tr><td><b>Emergency Contact</b></td> <td>: '.$mob.'</td></tr>
                                    <tr><td><b>City</b></td> <td>: '.$city.'</td></tr>
                                    <tr><td><b>Pincode</b></td> <td>: '.$pin.'</td></tr>
                                    </table>
                                    <br>
			                        <br>
			                        <br>
			                        <b>Thank You !<br>Regards,<br>Team, IS Blood Bank</b>
			                        </body>
			                        </html>
			                        ';
			
			                if(!$mail->send()) {
                                header("Location: profile.php?message=<font color='red'> Modified<br>Problem in sending Confirmation Mail<br>$conn->error</font>");
                            }
                     else{
                         header("Location: profile.php?message=<font color='green'> Modified<br>Confirmation Mail Sent <br>$conn->error</font>");
                     }
                 }
                
        }
        else
                {
                    header("Location: profile.php?message=<font color='red'> Problem in Modifying<br> $conn->error</font>");
                }
    }

    

    
?>
