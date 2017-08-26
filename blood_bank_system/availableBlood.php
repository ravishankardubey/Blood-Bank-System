<html lang="en">

<head>
    <title>Available Blood | Blood Bank System</title>
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

    <?php
                session_start();
                include 'connectMysql.php';
                error_reporting(E_ERROR | E_WARNING | E_PARSE);
                if(isset($_SESSION["username"]) && $_SESSION["type"]=="receiver")
                {
                    include 'headerReceiver.php';
                    $b_group = $_SESSION["b_group"];
                    if($b_group == "A+")
                        $bg = "a_plus";
                    else if($b_group == "B+")
                        $bg = "b_plus";
                    else if($b_group == "O+")
                        $bg = "o_plus";
                    else if($b_group == "A-")
                        $bg = "a_neg";
                    else if($b_group == "B-")
                        $bg = "b_neg";
                    else if($b_group == "O-")
                        $bg = "o_neg";
                    else if($b_group == "AB+")
                        $bg = "ab_plus";
                    else if($b_group == "AB-")
                        $bg = "ab_neg";
                    $query = "SELECT * FROM blood_sample where ".$bg.">0";
                }
                else
                {
                    include 'header.php';
                    $query = "SELECT * FROM blood_sample";
                }

                    
    ?>

        <img src="Images/hospital-home.jpg" style="width:100%;">
        <br>
        <div class="container-fluid">

            <?php 
            
                    //$query = "SELECT * FROM blood_sample";
                    $run_sql = mysqli_query($conn,$query);
                    if($run_sql->num_rows == 0) 
                    { 
                        ?>
            <div style="width:100%; text-align:center; font-size:20px; height:350;  padding-top:155px;">
                <h3>No Blood Sample Available!</h3>
            </div>
            <?php
                    }
                    else
                    {
            ?>
                <?php if (!empty($_GET['message'])) {
				echo '<center><p>'.$_GET['message'].'</p></center>';
				} ?>
                <p style="color:red;"><b>Note :</b> You can only request blood of your own blood group! <b> <?php echo $b_group; ?> </b></p>
                <table class="table table-hover">
                    <tr>
                        <th>Hospital Name</th>
                        <th>City</th>
                        <th>A +ve</th>
                        <th>B +ve</th>
                        <th>O +ve</th>
                        <th>A -ve</th>
                        <th>B -ve</th>
                        <th>O -ve</th>
                        <th>AB +ve</th>
                        <th>AB -ve</th>
                        <th></th>
                    </tr>
                    <?php
                        while($rows = mysqli_fetch_array($run_sql))
                        {
                            $h_e = $rows['email'];
                            $query1 = "SELECT hname, city FROM hospital  where email='$h_e'";
                            $run_sql1 = mysqli_query($conn,$query1);
                            $row1 = mysqli_fetch_array($run_sql1);
            ?>
                        <tr>
                            <td>
                                <a href="hospital.php?hos=<?php echo $h_e?>&req=no_blood">
                                    <?php echo $row1['hname']?>
                                </a>
                            </td>
                            <td>
                                <?php echo $row1['city'];?>
                            </td>
                            <td>
                                <?php echo "A +ve / "+$rows['a_plus'];?>
                            </td>
                            <td>
                                <?php echo "B +ve / "+$rows['b_plus'];?>
                            </td>
                            <td>
                                <?php echo "O +ve / "+$rows['o_plus'];?>
                            </td>
                            <td>
                                <?php echo "A -ve / "+$rows['a_neg'];?>
                            </td>
                            <td>
                                <?php echo "B -ve / "+$rows['b_neg'];?>
                            </td>
                            <td>
                                <?php echo "O -ve / "+$rows['o_neg'];?>
                            </td>
                            <td>
                                <?php echo "AB +ve / "+$rows['ab_plus'];?>
                            </td>
                            <td>
                                <?php echo "AB -ve / "+$rows['ab_neg'];?>
                            </td>
                            <td><a href="hospital.php?hos=<?php echo $h_e?>&req=blood"><button type="button" class="btn btn-success" name="request" >Request</button></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                </table>


                <?php
                    }
                    ?>
        </div>
        <?php include 'footer.php';?>
</body>

</html>
