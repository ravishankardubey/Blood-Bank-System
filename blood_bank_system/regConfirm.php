<html lang="en">

<head>
    <title>Confirm - Registration | Blood Bank System</title>
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
    <?php include 'header.php' ?>
    <div class="container">
        <div class="col-sm-12" style="text-align:center;">
            <div class="row">
                <?php if (!empty($_GET['message'])) {
				echo '<p style="font-size:20px;"> '.$_GET['message'].'</p>';
				} ?>
                <!--<p style="font-size:20px;">Registered Succesfully<br>Confirmation mail sent</p>-->
            </div>
            <div class="row" style="padding-top:50px;">
                <img src="Images/IS-bbs.png" class="img-rounded">
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>
