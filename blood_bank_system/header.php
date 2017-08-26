<head>
    <style>
        .modal-header-login,
        .close {
            background-color: #5cb85c;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }
        
        .modal-header-register,
        .close {
            background-color: #9F190C;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }
        
        .modal-footer {
            background-color: #f9f9f9;
        }
        
        .modal-content {
            min-height: 350px;
        }
        
        .modal-content a {
            text-decoration: none;
            color: inherit;
        }

    </style>

</head>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
            <a class="navbar-brand" href="#"><img src="Images/IS-bbs-new.png" class="img-rounded" width=200px;></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <!--<ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Page 1</a></li>
            </ul>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="blood-tips.php">Blood Tips</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="availableBlood.php">Available Blood</a></li>
                <li><a href="#" id="regModal">Register</a></li>
                <li><a href="#" id="loginModal">Login</a></li>
            </ul>
        </div>
    </div>
</nav>



<!-- Modal -->
<div class="modal fade" id="myModalReg" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header-register" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-pencil"></span> Register</h4>
                <h4>As</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px; color:#9F190C;">
                <div class="col-sm-6" style="text-align:center;">
                    <a href="regReceiver.php"><span class="glyphicon glyphicon-user" style="font-size:100px;"></span><br>Receiver</a>

                </div>
                <div class="col-sm-6" style="text-align:center;">
                    <a href="regHospital.php"><span class="glyphicon glyphicon-home" style="font-size:100px;"></span><br>Hospital</a>
                </div>


            </div>

        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $("#regModal").click(function() {
            $("#myModalReg").modal();
        });
    });

</script>









<div class="modal fade" id="myModalLogin" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content">
            <div class="modal-header-login" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <!-- <form id="form" role="form">-->
                <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" onkeyup="checkVal()">
                </div>
                <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password">
                </div>
                <p id="err" style="color:red;"></p>
                <div id="messages"></div>
                <button class="btn btn-success btn-block" id="logIn"><span class="glyphicon glyphicon-off"></span> Login</button>

                <!-- </form> -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {

        $("#logIn").click(function() {
            var p = $("#email").val();
            var q = $("#pass").val();
            $.ajax({
                type: "GET",
                data: "email=" + p + "&pass=" + q,
                dataType: "html",
                url: "validate.php",
                success: function(result) {


                    if (result == "correct-receiver") {
                        $("#err").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                        window.location = "homeReceiver.php";
                    } else if (result == "correct-hospital") {
                        $("#err").html("<font color='green'><span class='glyphicon glyphicon-ok'></span> Validated! Logging In</font>");
                        window.location = "homeHospital.php";
                    } else if (result == "invalid")
                        $("#err").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Invalid ID-Pass.</font>");
                    else if (result == "not")
                        $("#err").html("<font color='red'><span class='glyphicon glyphicon-ok'></span> Not Registred Yet!</font>");

                }
            });
        });
    });

</script>
<script>
    $(document).ready(function() {
        $("#loginModal").click(function() {
            $("#myModalLogin").modal();
        });
    });

</script>
