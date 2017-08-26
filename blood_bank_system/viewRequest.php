<html lang="en">

<head>
    <title>View Blood Request | Blood Bank System</title>
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
                if(isset($_SESSION["username"]) && $_SESSION["type"]=="hospital")
                {
                    include 'headerHospital.php';
                    $eee = $_SESSION["username"];
                    $type = $_SESSION["type"];
         ?>

        <!--<div class="container-rXd" style="width:100%;"></div>-->
        <img src="Images/hospital-home.jpg" style="width:100%;">

        <div class="container-fluid">

            <h3>Blood Requests</h3>
            <div class="col-sm-12">
                <?php 
            
                    $query = "SELECT * FROM blood_request  where Hospital='$eee' order by time_stamp desc";
                    $run_sql = mysqli_query($conn,$query);
                    if($run_sql->num_rows == 0) 
                    { 
                        ?>
                <div style="width:100%; text-align:center; font-size:20px; height:200px; background-color:#ffe5e5; border-radius: 5px 50px; padding-top:80px;">No Blood Request<br><br></div>

                <?php
                    }
                    else
                    {
                        ?>
                    <?php if (!empty($_GET['message'])) {
				echo '<center><p>'.$_GET['message'].'</p></center>';
				} ?>
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>Blood Group</th>
                            <th>Requested On</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php
                        while($rows = mysqli_fetch_array($run_sql))
                        {
                            $r_e = $rows['receiver'];
                            $query1 = "SELECT name, city, blood_group FROM receiver where email='$r_e'";
                            $run_sql1 = mysqli_query($conn,$query1);
                            $row1 = mysqli_fetch_array($run_sql1);
                            $d = $rows['time_stamp'];
                            //$d = date("d-m-y | h:i:sa", $d);
                            //$stamp = date("r", $d);
                            if($rows['status'] == "Pending")
                            {
                                //$_SESSION["rec_bgroup"] = $row1['blood_group'];
                            ?>

                            <tr class="danger">
                                <td>
                                    <a href="receiver.php?rec=<?php echo $r_e;?>&b_group=<?php echo $row1['blood_group'];?>&req_approval=no">
                                        <?php echo $row1['name'];?>
                                    </a>
                                </td>d
                                <td>
                                    <?php echo $row1['city'];?>
                                </td>
                                <td>
                                    <?php echo $row1['blood_group'];?>
                                </td>
                                <td>
                                    <?php echo $d;?>
                                </td>
                                <td>
                                    <?php echo $rows['status'];?>
                                </td>
                                <td><a href="receiver.php?rec=<?php echo $r_e?>&req_approval=approve&sno=<?php echo $rows['sn'];?>"><button type="button" class="btn btn-success" name="req_aproval" value="approve">Approve</button></a></td>
                            </tr>
                            <?php
                            }
                            else if($rows['status'] == "Approved")
                            {
                            ?>

                                <tr class="success">
                                    <td>
                                        <a href="receiver.php?rec=<?php echo $r_e;?>&req=<?php echo $row1['blood_group'];?>">
                                            <?php echo $row1['name'];?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row1['city'];?>
                                    </td>
                                    <td>
                                        <?php echo $row1['blood_group'];?>
                                    </td>
                                    <td>
                                        <?php echo $d;?>
                                    </td>
                                    <td>
                                        <?php echo $rows['status'];?>
                                    </td>
                                    <td><button type="button" class="btn btn-default" disabled="disabled">Approve</button></td>
                                </tr>
                                <?php
                            }
                        }
                    }
            
            ?>
                    </table>
                    <?php
                }
    else{
                    
                    header("Location: loginAgain.php");

                }
    ?>
            </div>
        </div>
        <?php include 'footer.php';?>
</body>

</html>
