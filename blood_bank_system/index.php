<html lang="en">

<head>
    <title>Blood Bank System</title>
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"><img src="images/bbs-3.jpg" style="width:100%;"></div>
            <div class="item"><img src="Images/bbs-4.jpg" style="width:100%;"></div>
        </div>
    </div>
    <div class="container" style="padding-top: 50px;">
        <div class="col-sm-4">
            <div class="frontBlood">
                <h4>Blood Donate Tips</h4>
                <hr>
                <div class="frontContent">
                    <ul>
                        <b>WHAT YOU SHOULD EAT BEFORE DONATING BLOOD</b><br>
                        <hr> A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.
                        <ul>
                            <li>Low fat foods</li>
                            <li>Iron rich foods</li>

                        </ul>
                    </ul>
                    <br>
                    <ul>
                        <b>Beat the myth</b>
                        <hr> This is what you can expect when you are ready to donate blood:
                        <ul>
                            <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</li>

                        </ul>
                    </ul>
                    <br>
                    <ul>
                        <b>Blood Groups</b>
                        <hr> blood group of any human being will mainly fall in any one of the following groups.
                        <ul>
                            <li>A positive or A negative </li>
                            <li>B positive or B negative </li>
                            <li>O positive or O negative </li>
                            <li>AB positive or AB negative.</li>
                        </ul>
                    </ul>

                    <br>
                    <ul>
                        <b>Universal Donors and Recipients</b>
                        <hr>
                        <p>The most common blood type is O, followed by type A.</p>
                        <p>Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
                    </ul>

                    <br>
                    <ul>
                        <b>Do donate blood,</b>
                        <hr>
                        <p>Only if you satisfy all of the following conditions</p>
                        <ul>
                            <li>You are between age group of 18-60 years.</li>
                            <li>Your weight is 45 kgs or more.</li>
                            <li>Your last blood donation was 3 or more months earlier.</li>
                        </ul>
                    </ul>

                    <br>
                    <ul>
                        <b>Do NOT donate blood,</b>
                        <hr>
                        <p>If you have any of the following conditions</p>
                        <ul>
                            <li>Cold / fever in the past 1 week.</li>
                            <li>Under treatment with antibiotics or any other medication.</li>
                            <li>Major surgery in the last 6 months.</li>
                            <li>Vaccination in the last 24 hours.</li>
                        </ul>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="frontBlood">
                <h4>Recent Camps</h4>
                <hr>
                <div class="frontContent">
                    <ul>
                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Venue</td>
                                <td align=right>Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-calendar"></span> : Date</td>
                                <td align=right>12th July, 2017</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Volunteers</td>
                                <td align=right>30</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Venue</td>
                                <td align=right>New Delhi</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-calendar"></span> : Date</td>
                                <td align=right>08th July, 2017</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Volunteers</td>
                                <td align=right>50</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Venue</td>
                                <td align=right>Hapud</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-calendar"></span> : Date</td>
                                <td align=right>05th July, 2017</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Volunteers</td>
                                <td align=right>26</td>
                            </tr>
                        </table>
                        <hr>
                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Venue</td>
                                <td align=right>Chandausi</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-calendar"></span> : Date</td>
                                <td align=right>01th July, 2017</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Volunteers</td>
                                <td align=right>37</td>
                            </tr>
                        </table>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="frontBlood">
                <h4>Regional Offices</h4>
                <hr>
                <div class="frontContent">
                    <ul>
                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Deshraj</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span> : +91-7885965254</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Deshraj</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span> : +91-7885965254</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Deshraj</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span> : +91-7885965254</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Deshraj</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span> : +91-7885965254</td>
                            </tr>
                        </table>
                        <hr>

                        <table style="width:100%; ">
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> : Kanpur</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-user"></span> : Deshraj</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span> : +91-7885965254</td>
                            </tr>
                        </table>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>

</body>

</html>
