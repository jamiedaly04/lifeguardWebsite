
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
        <script src="form.js"></script>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="loginbtn.css" rel="stylesheet">
  <!--<a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by Kjpargeter - Freepik.com</a>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
<body>
     <nav class="navbar navbar-default navbar-fixed-top">
         <a class="navbar-brand"><span><img src="img/128x128.png" id="logo"  alt="Lifesaver logo"></span>Lifeguard Search &amp; Rescue</a>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                 <li class="navs" ><a href="#" role="button" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div id="background">
        <div class="container-form">
            <!-- Form Started -->
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form id="reused_form">
                                    <div class="form-group">
                                        <h4>Contact Us</h4>
                                        <p7>Please let us know of any improvements that can be made to either our app or our website, letting us know of any bugs or any features you hope to see added will help us alot so we appreciate all feedback!</p7><br><br>
                                        <label><i class="fa fa-user" aria-hidden="true"></i> Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-envelope" aria-hidden="true"></i> Email:</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-comment" aria-hidden="true"></i> Your Message:</label>
                                        <textarea rows="4" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-block"><p5>Send</p5></button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h2>Success! Your Message was Sent Successfully.</h2>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Form Ended -->
        </div>
    <br><br><br><br><br><br><br>
    </div>
<?php include "includes/footer.php";?>