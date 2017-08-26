<?php 
    include 'connectMysql.php'; 
    date_default_timezone_set('Asia/Calcutta');
    require 'phpMailerSettings.php';

    /* For Receiver */

    if($_POST['type'] == 'receiver')
    {
        $type = $_POST['type'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $blood_group = $_POST['blood_group'];
        $weight = $_POST['weight'];
        $phone = $_POST['phone'];
        $mob = $_POST['mob'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];
        $address = $_POST['add'];
        $d = date("y-m-d H:i:s");
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO user_details values('$email', '$fname', '$hash', '$type')";
        if ($conn->query($query) === TRUE) {
                $query = "INSERT INTO receiver values('$fname', '$email', '$dob', '$gener', '$blood_group', $weight, $phone, $mob, '$address', '$city', $pin, '$d')";
			     if ($conn->query($query) === TRUE) {
                     
                    // after successful regitration mailing of details to users
                     
                     $mail->addAddress($email, $fname);
                     $mail->setFrom('ravishankar.rsd@gmail.com', 'IS Blood Bank');
    	                   $mail->addReplyTo('ravishankar.rsd@gmail.com', 'IS Blood Bank');
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
			                $mail->Subject = 'IS Blood Bank || Confirmation OF  Receiver Registration';
			                $mail->Body    = '
			                        <html>
			                        <head>
			                        <title>IS Blood Bank || Confirmation OF  Receiver Registration</title>
			                        </head>
			                        <body>
			                        <p>Hello <b>'.$fname.'</b>,</p>
			                        <p>You are successfully registered for <b>IS Blood Bank</b> as a <b>'.$type.'</b> !</p>
                                    <p>Now you can avail the facilities provided by IS Blood Bank in Emergency conditions</p>
			                        <p>following are your details -</p>
			                        <table>
			                        <tr><td><b>Name</b></td> <td>: '.$fname.'</td></tr>
			                        <tr><td><b>EMail ID</b></td> <td>: '.$email.'</td></tr>
			                        <tr><td><b>Password</b></td> <td>: '.$pass.'</td></tr>
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
                                header("Location: regConfirm.php?message=<font color='red'> Registered<br>Problem in sending Confirmation Mail<br>$conn->error</font>");
                            }
                     else{
                         header("Location: regConfirm.php?message=<font color='green'> Registered<br>Confirmation Mail Sent <br> <b>LOGIN</b> to Avail Facilites of <b>IS Blood Bank</b><br> $conn->error</font>");
                     }
                 }
                
        }
        else
                {
                    header("Location: regReceiver.php?message=<font color='red'> *Problem in Registering<br>*Try again with Valid Details<br> *$conn->error</font>");
                }
    }
    
    /* For Hospital */

    if($_POST['type'] == 'hospital')
    {
        $type = $_POST['type'];
        $hname = $_POST['hname'];
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $mob = $_POST['mob'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];
        $address = $_POST['add'];
        
        
        $d = date("y-m-d H:i:s");
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO user_details values('$email', '$hname', '$hash', '$type')";
        if ($conn->query($query) === TRUE) {
                $query = "INSERT INTO hospital values('$hname', '$cname', '$email',  $phone, $mob, '$city', '$pin', $address, '$d')";
			     if ($conn->query($query) === TRUE) {
                     
                    // after successful regitration mailing of details to users
                     
                     $mail->addAddress($email, $fname);
                     $mail->setFrom('ravishankar.rsd@gmail.com', 'IS Blood Bank');
    	                   $mail->addReplyTo('ravishankar.rsd@gmail.com', 'IS Blood Bank');
			                $mail->addCC('ravi.rsdubey@gmail.com', Admin);
			                $mail->Subject = 'IS Blood Bank || Confirmation Of  Hospital Registration';
			                $mail->Body    = '
			                        <html>
			                        <head>
			                        <title>IS Blood Bank || Confirmation Of  Hospital Registration</title>
			                        </head>
			                        <body>
			                        <p>Hello <b>'.$cname.'</b>,</p>
			                        <p><b>'.$hname.'</b> is successfully registered for <b>IS Blood Bank</b> as a <b>'.$type.'</b> !</p>
                                    <p>Now you can avail the facilities provided by IS Blood Bank</p>
			                        <p>following are your Login Credentials -</p>
			                        <table>
			                        <tr><td><b>Name</b></td> <td>: '.$email.'</td></tr>
			                        <tr><td><b>EMail ID</b></td> <td>: '.$pass.'</td></tr>
                                    </table>
                                    <br>
                                    <p>following are Current Details of your Hospital -</p>
                                    <table>
			                        <tr><td><b>Hospital Name</b></td> <td>: '.$hname.'</td></tr>
			                        <tr><td><b>Contact Person</b></td> <td>: '.$cname.'</td></tr>
                                    <tr><td><b>Hospital Phone</b></td> <td>: '.$phone.'</td></tr>
                                    <tr><td><b>Emergency Contact</b></td> <td>: '.$mob.'</td></tr>
                                    <tr><td><b>City</b></td> <td>: '.$city.'</td></tr>
                                    <tr><td><b>Pincode</b></td> <td>: '.$pin.'</td></tr>
                                    <tr><td><b>Created At</b></td> <td>: '.$d.'</td></tr>
                                    </table>
                                    <br>
			                        <br>
			                        <br>
			                        <b>Thank You !<br>Regards,<br>Team, IS Blood Bank</b>
			                        </body>
			                        </html>
			                        ';
			
			                if(!$mail->send()) {
                                header("Location: regConfirm.php?message=<font color='green'>Congratulations <b>$cname</b>, Your Hospital <b>$hname</b> is Registered Now</font><font color='red'><br>Problem in sending Confirmation Mail</font><br><font color='green'><b>LOGIN</b> to Avail Facilites of <b>IS Blood Bank</b><br>$conn->error</font>");
                            }
                     else{
                         header("Location: regConfirm.php?message=<font color='green'>Congratulations <b>$cname</b>, Your Hospital <b>$hname</b> is Registered Now<br>Confirmation Mail Sent <br> <b>LOGIN</b> to Avail Facilites of <b>IS Blood Bank</b><br> $conn->error</font>");
                     }
                 }
                
        }
        else
                {
                    header("Location: regHospital.php?message=<font color='red'> *Problem in Registering<br>*Try again with Valid Details<br> *$conn->error</font>");
                }
    }

    

    
?>
