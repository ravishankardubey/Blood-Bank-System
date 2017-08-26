<html lang="en">

<head>
    <title>Blood Tips | Blood Bank System</title>
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
        <h3>Blood Tips</h3>
        <hr>
        <div class="col-sm-9">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Beat the myth</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:<br><br>
                            <ul>
                                <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
                                </li>
                                <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
                                </li>
                                <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
                                </li>
                                <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
                                </li>
                                <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
                                </li>
                                <li>Blood will be separated into components within eight hours of donation
                                </li>
                                <li>The blood will then be taken to the laboratory for testing.
                                </li>
                                <li>Once found safe, it will be kept in special storage and released when required.
                                </li>
                                <li>The blood is now ready to be taken to the hospital, to save lives.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Blood Groups</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.<br><br> Most humans are in the ABO blood group. The ABO group has four categories namely <br>
                            <ol>
                                <li> A group </li>
                                <li> B group </li>
                                <li> O group and </li>
                                <li> AB group</li>
                            </ol><br> In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.<br><br> Thus blood group of any human being will mainly fall in any one of the following groups.<br>
                            <ul>
                                <li>A positive or A negative <br>
                                </li>
                                <li>B positive or B negative <br>
                                </li>
                                <li>O positive or O negative <br>
                                </li>
                                <li>AB positive or AB negative.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Universal Donors and Recipients</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">The most common blood type is O, followed by type A.<br><br> Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.<br><br> However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        DO donate blood, only if you satisfy all of the following conditions</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body"><span class="glyphicon glyphicon-ok" style="color:green;"></span>&nbsp;&nbsp; You are between age group of 18-60 years.
                            <br><span class="glyphicon glyphicon-ok" style="color:green;"></span>&nbsp;&nbsp; Your weight is 45 kgs or more.
                            <br><span class="glyphicon glyphicon-ok" style="color:green"></span>&nbsp;&nbsp; Your hemoglobin is 12.5 gm% minimum.
                            <br><span class="glyphicon glyphicon-ok" style="color:green"></span>&nbsp;&nbsp; Your last blood donation was 3 or more months earlier.
                            <br><span class="glyphicon glyphicon-ok" style="color:green"></span>&nbsp;&nbsp; You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        DO NOT donate blood, if you have any of the following conditions</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body"><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Cold / fever in the past 1 week.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Under treatment with antibiotics or any other medication.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Major surgery in the last 6 months.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Vaccination in the last 24 hours.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Had fainting attacks during last donation.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Have regularly received treatment with blood products.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Shared a needle to inject drugs/ have history of drug addiction.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Had sexual relations with different partners or with a high risk individual.
                            <br><span class="glyphicon glyphicon-remove" style="color:red;"></span>&nbsp;&nbsp; Been tested positive for antibodies to HIV.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        A Healthy Donor</a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.

                            <ul>
                                <li>Low fat foods
                                </li>
                                <li>Iron rich foods</li>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                        Blood Bank</a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice..</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                       About Blood Donation</a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                        World Blood Donor Day</a>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <?php include 'tab.php'; ?>
        </div>
    </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>
