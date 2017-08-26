<?php
    include 'connectMysql.php';
    session_start();
    include 'connectMysql.php';
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    if(isset($_SESSION["username"]) && $_SESSION["type"]=="receiver")
    {
        $eee = $_SESSION["username"];
        $type = $_SESSION["type"];
        $query = "SELECT name FROM user_details where email='$eee'";
        $run_sql = mysqli_query($conn,$query); 
        $rows = mysqli_fetch_array($run_sql);
        $name = $rows['name'];
    }
?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                <a class="navbar-brand" href="index.php">
                    <a class="navbar-brand" href="#"><img src="Images/IS-bbs-new.png" class="img-rounded" width=200px;></a>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!--<ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Page 1</a></li>
            </ul>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="homeReceiver.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="blood-tips.php">Blood Tips</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="availableBlood.php">Available Blood</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php 
                                echo $name;
                                echo " &nbsp; <span class='glyphicon glyphicon-user'></span>";
                                ?>
                        <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php">Your Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
