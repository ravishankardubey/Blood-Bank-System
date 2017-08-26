<html lang="en">

<head>
    <title>About Us | Blood Bank System</title>
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
        if(isset($_SESSION["username"]) && $_SESSION["type"]=="receiver")
        {
            include 'headerReceiver.php';
        }
        else if(isset($_SESSION["username"]) && $_SESSION["type"]=="hospital")
        {
            include 'headerHospital.php';
        }
        else
            include 'header.php';
    ?>
    <div class="container">
        <div class="col-sm-7">
            <h3>About Us</h3>
            <hr>
            <p style="text-align: justify;">'IS Blood Bank' is the first product resulted out of the community welfare initiative called 'People Project' from InternShala. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.<br><br> Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
        </div>

        <div class="col-sm-5" style="padding-top:100px;">
            <img src="Images/IS-bbs-new.png" class="img-rounded" style="width:100%;">
        </div>
    </div>
    <?php include 'footer.php';?>

</body>

</html>
