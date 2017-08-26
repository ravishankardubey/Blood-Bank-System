<?php
    
	session_start();
	if (isset($_SESSION))
	{
		unset($_SESSION);
		session_unset();
		session_destroy();
	}
?>
    <html lang="en">

    <head>
        <title>Logout | Blood Bank System</title>
        <link rel="icon" href="Images/title-icon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blood Bank System">
        <meta name="author" content="Ravi Shankar Dubey">
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7/jquery-3.1.1.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/myStyle.css">
    </head>

    <body>
        <?php include 'header.php';?>
        <div class="container">
            <center>
                <h3>Logged Out Successfully!</h3>
                <h3>Log In again to avail services</h3>
            </center>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">

                <!-- <form id="form" role="form">-->
                <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="email-1" name="email-1" placeholder="Enter email" onkeyup="checkVal()">
                </div>
                <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="pass-1" name="pass-1" placeholder="Enter password">
                </div>
                <p id="err-1" style="color:red;"></p>
                <div id="messages"></div>
                <button class="btn btn-success btn-block" id="logIn-1"><span class="glyphicon glyphicon-off"></span> Login</button>

                <!-- </form> -->

                <script>
                    $(document).ready(function() {

                        $("#logIn-1").click(function() {
                            var p = $("#email-1").val();
                            var q = $("#pass-1").val();
                            $.ajax({
                                type: "GET",
                                data: "email=" + p + "&pass=" + q,
                                dataType: "html",
                                url: "validate.php",
                                success: function(result) {


                                    if (result == "correct-receiver") {
                                        $("#err-1").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                                        window.location = "homeReceiver.php";
                                    } else if (result == "correct-hospital") {
                                        $("#err-1").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                                        window.location = "homeHospital.php";
                                    } else if (result == "invalid")
                                        $("#err-1").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Invalid ID-Pass.</font>");
                                    else if (result == "not")
                                        $("#err-1").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Not Registred Yet!</font>");

                                }
                            });
                        });
                    });

                </script>

            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>

    </html>
