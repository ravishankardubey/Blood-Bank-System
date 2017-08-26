<html lang="en">

<head>
    <title>Contact Us | Blood Bank System</title>
    <link rel="icon" href="Images/title-icon.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blood Bank System">
    <meta name="author" content="Ravi Shankar Dubey">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7/jquery-3.1.1.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/myStyle.css">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

    </style>
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
        <h3>Contact Us</h3>

        <div class="col-sm-6">
            <!-- <form> -->
            <div class="form-group row">
                <div class=" form-group col-sm-8">
                    <label for="usr">Full Name *</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-sm-8">
                    <label for="pwd">Email ID *</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class=" form-group col-sm-8">
                    <label for="pwd">Mobile No. </label>
                    <input type="number" class="form-control" id="mob">
                </div>
                <div class=" form-group col-sm-8">
                    <label for="comment">Query *</label>
                    <textarea class="form-control" rows="5" id="query"></textarea>
                </div>
                <div class=" form-group col-sm-8">
                    <button type="button" class="btn btn-danger col-sm-3" id="sendQuery">Send</button>
                </div>
            </div>
            <!-- </form> -->
            <script>
                $(document).ready(function() {

                    $("#sendQuery").click(function() {
                        var a = $("#name").val();
                        var b = $("#email").val();
                        var c = $("#mob").val();
                        var d = $("#query").val();
                        $.ajax({
                            type: "GET",
                            data: "name=" + a + "&email=" + b + "&mob=" + c + "&query=" + d,
                            dataType: "html",
                            url: "queryMailer.php",
                            success: function(result) {

                                alert(result);

                            }
                        });
                    });
                });

            </script>
        </div>

        <div class="col-sm-6">
            <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: 28.4134719,
                        lng: 77.0700423
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }

            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy8xvNl-cP-xvtFTl2DtOnzwdf8o2VN6I&callback=initMap">


            </script>
        </div>

    </div>
    <?php include 'footer.php';?>
</body>

</html>
