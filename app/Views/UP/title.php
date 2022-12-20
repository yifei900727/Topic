<!-- <?php
        // session_start();
        // if (isset($_SESSION['account'])) {
        //     header("Location:boardboard/hall.php");
        // }
        // echo $_SESSION['u_id'];
        ?> -->
<!DOCTYPE html>

<html lang="Zh-TW">

<head>
   
    <title>I 福了 U</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="love.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="<?= base_url() ?>/as/styles/main.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url() ?>/as/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url() ?>/as/styles/modal-dialog.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ?>/as/styles/map.css">
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/css" media="all"></script>
    <script src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/as/scripts/jquery-mobilemenu.min.js"></script>
    <script src="<?= base_url() ?>/as/scripts/custom.js"></script>
    <script src="<?= base_url() ?>/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>


    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer ></script>

    

</head>


    <div class="wrapper row1">
        <header id="header" class="full_width clear">
            <div id="topnav" class="position-relative">
                <div id="hgroup">
                    <h1><a href="Home">I 福了 U</a></h1>
                </div>


                <div class="align">
                    <li class="active"><a href="Home" title="Home">首頁</a></li>
                    <li><a class="active" href="<?= base_url() ?>/VolunteerCon" title="Volunteer">活動&志工</a></li>
                    <li><a class="active" href="<?= base_url() ?>/HospitalCon" title="Hospital">醫療&照護</a></li>
                    <li><a class="active" href="<?= base_url() ?>/EndofCon" title="end of life">壽終正寢</a></li>
                </div>


            </div>



        </header>
    </div>
    <div class="wrapper row3" style="background-color: #f0eee4;">
