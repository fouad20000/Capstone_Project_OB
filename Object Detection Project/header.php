<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Object_Detection_License_plate_number</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/reset.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Object Detection</span>
            </a>

            <nav id="navbar" class="navbar row">
                <ul>
                    <li><a class="nav-link scrollto active " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto " href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#team">Team</a></li>
                    &nbsp;&nbsp;&nbsp;
                    <?php
                    if (isset($_SESSION['usersuid'])) { ?>

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button"
                            data-toggle="dropdown"><?php echo "Welcome " . $_SESSION['usersuid'] ?></button>
                        <ul class="dropdown-menu">
                            <li><a href="AdminDashboard/Mainpage.php">Profile Page</a></li>
                            <li><a href="Login_System/logout.inc.php">Logout</a></li>
                        </ul>
                    </div>
                    &nbsp;&nbsp;&nbsp;

                    <?php
                    } else { ?>
                    <li><a class='nav-link scrollto' href='Login.php'>Login</a></li>
                    <li><a class='nav-link scrollto' href='Signup.php'>Signup</a></li>
                    <?php
                    }
                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->