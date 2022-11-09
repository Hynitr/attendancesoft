<?php
include("functions/init.php");
if (isset($_SESSION['code'])) {

    $sql ="SELECT * FROM students WHERE `AdminID` = '".$_SESSION["code"]."'";
    $result = query($sql);
    if(row_count($result) >= 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['AdminID'];
    $pass = str_replace('/', '', $data);
    $fname = "upload/IdCard/$pass.php";

    $hand = fopen($fname, 'w');

     $sqll = "UPDATE students SET `idcard` = '$fname' WHERE `AdminID` = '".$_SESSION["code"]."'";
     $re   = query($sqll);
     file_put_contents($fname, ob_get_contents());
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo $call['school']?></title>


    <!-- Hynitr's Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="ID Card Temp/css/style.css" />

    <style>
    .card {

        height: 336px;
        width: 192px;
        background-color: gold;
        background-image: url('ID Card Temp/img/idd.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card .card-header {

        background-color: gold;
        border: none;
    }

    #round {

        background-color: #000;
        color: #fff;
        width: 172px;
        height: 20px;
        border-radius: 4px;
        margin-bottom: 40px;
    }
    </style>
</head>


<body>


    <section class="mt-5 px-5">
        <div class="container">
            <div class="row">

                <div class="card me-5 mb-5">

                    <div class="justify-content-center mt-2 text-center">
                        <img src="dist/img/logo.png" class="justify-content-center mt-2 text-center"
                            style="width: 40px;">
                        <h2 style="font-size: 12px;" class="fw-bold mb-0"><?php echo strtoupper($call['school'])?> </h6>
                            <p id="addr" style="font-size: 9px;"><?php echo $call['addr']?></p>
                            <p id="tel" style="font-size: 9px;" class="col-12">&nbsp;&nbsp; Tel: 09072959938,
                                08136770523</p>
                    </div>

                    <div class="card-body justify-content-center text-center mb-0 mt-0">
                        <img style="border-radius: 50%; width: 140px; height: 140px;"
                            src="upload/studentDP/<?php echo $row['Passport'] ?>">
                    </div>

                    <div id="round">
                        <div class="row">
                            <div class="col-5">
                                <img src="upload/QRCard/<?php echo $row['qrcode']; ?>" class="img-fluid"
                                    style="width: 40px; margin-top: -25px; margin-left: -20px;">
                            </div>
                            <div class="col-7">
                                <h6 style="margin-top: -7px; font-size: 11px; margin-left: -35px; font-weight: bold;">
                                    <?php echo $row['SurName']." ".$row['Middle Name']; ?></h6>
                            </div>
                        </div>
                        <p style="font-size: 8px; color: black; margin-left: 30px; margin-top: -5px;">
                            www.deguidelightschool.com.ng</p>
                    </div>

                </div>


                <div class="card" style="background-color: #000;">
                    <div class="container">
                        <div class="col-12" style="margin-top: 40px;">
                            <ul style="list-style-type:disc; color: white" class="text-sm">
                                <li style="font-size: 11px;">This identity card is an official document and relates to
                                    the
                                    person described.</li>
                                <br />
                                <li style="font-size: 11px;">Impersonation, alteration, destruction or transfer of the
                                    authorized holder to another person is a penal offence.</li>
                                <br />
                                <li style="font-size: 11px;">If found, kindly return to the address stated in front of
                                    this card.</li>
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="ID Card Temp/js/jquery.js"></script>
    <script src="ID Card Temp/js/index.js"></script>
    <script src="ID Card Temp/js/jquery.min.js "></script>
    <script src="ID Card Temp/js/bootstrap.min.js "></script>
    <script src="ID Card Temp/js/popper.min.js "></script>
    <script src="ID Card Temp/js/fontawesome.min.js "></script>

</body>


</html>
<?php
} else {

  if (!isset($_GET['id'])) {

   redirect("./enroll");

}


    $sql = "SELECT * FROM students WHERE `AdminID` = '".$_GET["id"]."'";
    $result = query($sql);
    if(row_count($result) >= 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['AdminID'];
    $pass = str_replace('/', '', $data);
    $fname = "upload/IdCard/$pass.php";

    $hand = fopen($fname, 'w');

     $sqll = "UPDATE students SET `idcard` = '$fname' WHERE `AdminID` = '".$_GET["id"]."'";
     $re   = query($sqll);
     file_put_contents($fname, ob_get_contents());
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo $call['school']?></title>


    <!-- Hynitr's Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="ID Card Temp/css/style.css" />

    <style>
    .card {

        height: 336px;
        width: 192px;
        background-color: gold;
        background-image: url('ID Card Temp/img/idd.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card .card-header {

        background-color: gold;
        border: none;
    }

    #round {

        background-color: #000;
        color: #fff;
        width: 172px;
        height: 20px;
        border-radius: 4px;
        margin-bottom: 40px;
    }
    </style>
</head>


<body>


    <section class="mt-5 px-5">
        <div class="container">
            <div class="row">

                <div class="card me-5 mb-5">

                    <div class="justify-content-center mt-2 text-center">
                        <img src="dist/img/logo.png" class="justify-content-center mt-2 text-center"
                            style="width: 40px;">
                        <h2 style="font-size: 12px;" class="fw-bold mb-0"><?php echo strtoupper($call['school'])?> </h6>
                            <p id="addr" style="font-size: 9px;"><?php echo $call['addr']?></p>
                            <p id="tel" style="font-size: 9px;" class="col-12">&nbsp;&nbsp; Tel: 09072959938,
                                08136770523</p>
                    </div>

                    <div class="card-body justify-content-center text-center mb-0 mt-0">
                        <img style="border-radius: 50%; width: 140px; height: 140px;"
                            src="upload/studentDP/<?php echo $row['Passport'] ?>">
                    </div>

                    <div id="round">
                        <div class="row">
                            <div class="col-5">
                                <img src="upload/QRCard/<?php echo $row['qrcode']; ?>" class="img-fluid"
                                    style="width: 40px; margin-top: -25px; margin-left: -20px;">
                            </div>
                            <div class="col-7">
                                <h6 style="margin-top: -7px; font-size: 11px; margin-left: -35px; font-weight: bold;">
                                    <?php echo $row['SurName']." ".$row['Middle Name']; ?></h6>
                            </div>
                        </div>
                        <p style="font-size: 8px; color: black; margin-left: 30px; margin-top: -5px;">
                            www.deguidelightschool.com.ng</p>
                    </div>

                </div>


                <div class="card" style="background-color: #000;">
                    <div class="container">
                        <div class="col-12" style="margin-top: 40px;">
                            <ul style="list-style-type:disc; color: white" class="text-sm">
                                <li style="font-size: 11px;">This identity card is an official document and relates to
                                    the
                                    person described.</li>
                                <br />
                                <li style="font-size: 11px;">Impersonation, alteration, destruction or transfer of the
                                    authorized holder to another person is a penal offence.</li>
                                <br />
                                <li style="font-size: 11px;">If found, kindly return to the address stated in front of
                                    this card.</li>
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="ID Card Temp/js/jquery.js"></script>
    <script src="ID Card Temp/js/index.js"></script>
    <script src="ID Card Temp/js/jquery.min.js "></script>
    <script src="ID Card Temp/js/bootstrap.min.js "></script>
    <script src="ID Card Temp/js/popper.min.js "></script>
    <script src="ID Card Temp/js/fontawesome.min.js "></script>

</body>


</html>
<?php
}
?>