<html lang="en">

<head>
    <title>Hospital Registration | Blood Bank System</title>
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
        <div class="col-sm-9">
            <h2>Register as a Hospital</h2>
            <?php if (!empty($_GET['message'])) {
				echo '<p style="font-size:20px;"> '.$_GET['message'].'</p>';
				} ?>
            <form method="post" action="regExecute.php">
                <div class="panel-group">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Login Information</div>
                        <div class="panel-body">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="hname">Hospital Name*</label>
                                        <input type="text" class="form-control" name="hname" id="hname" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cname">Contact Person*</label>
                                        <input type="text" class="form-control" name="cname" id="cname" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email ID*</label>
                                        <input type="email" class="form-control" name='email' id="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pass">Password*</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>



                    <div class="panel panel-danger">
                        <div class="panel-heading">Contact Information</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Hospital Phone*</label>
                                        <input type="number" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mob">Emergency Contact (Mobile)*</label>
                                        <input type="number" class="form-control" name="mob" id="mob" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City*</label>
                                        <input type="text" class="form-control" name="city" id="city" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pin">Pincode (ZIP)*</label>
                                        <input type="number" class="form-control" name="pin" id="pin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="add">Address*</label>
                                        <textarea class="form-control" rows="5" name="add" id="add"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <input type="hidden" name="type" id="type" value="hospital">
                <div class="col-sm-12" style="text-align:center;"><input type="submit" class="btn btn-danger" value="Register"></div>
            </form>
        </div>





        <div class="col-sm-3">
            <?php include 'tab.php'; ?>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>
