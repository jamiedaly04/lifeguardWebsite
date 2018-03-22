<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Lifeguard Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="loginbtn.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <a class="navbar-brand"><span><img src="img/128x128.png" id="logo" alt="Lifesaver logo"></span>Lifeguard Search
        &amp; Rescue</a>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="navs"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="safety.php">Safety Information</a></li>
                <li><a href="lifeguards.php">Our Lifeguards</a></li>
                <li><a href="app.php">Our App</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navs"><a href="#" role="button" data-toggle="modal" data-target="#login-modal"><span
                                class="glyphicon glyphicon-user"></span> My Account</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="cover">
    <div class="cover-text">
        <h1>Welcome to Lifeguard Search &amp; Rescue!</h1>
        <p>The website and app dedicated to keeping beachgoers safe at the seaside, we provide a platform that enhances
            lifeguards vision across the coast. Download our app now for details about how you can stay safe and protect
            yourself with our new location tracking app. </p>

    </div>
</div>

<div class="cover2">
    <div class="cover-text2">
        <div class="col-sm-4" id="surf-tab">
            <h2>Beach Hazards &amp; Safety Information</h2>
            <p3>For more information about how to stay safe from harsh beach weather conditions such as rip currents,
                pesky beach wildlife or for medical treatment information click here!
            </p3>

        </div>
        <div class="col-sm-4" id="app-tab">
            <h2>Our App</h2>
            <p3>Click here to download our new beach safety app!</p3>
        </div>
        <div class="col-sm-4" id="life-tab">
            <h2>Our Lifeguards</h2>
            <p3>Meet some of our amazing lifeguards who have years of experience at providing the best support for
                people attending the beach. In the last year almost 200 lives were saved by lifeguards alone across the
                country, so take some time to learn about our incredible staff!
            </p3>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>


