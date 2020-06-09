<?php
    include_once 'includes/connect.inc.php';
    session_start();
    if(isset($_SESSION['privilege'])) {
      if(strcmp($_SESSION['privilege'], "admin") !== 0) {
          // User is not an admin
          header("Location: index.php");
          exit();
      }
    } else {
      //User is not signed in
      header("Location: index.php");
      exit();
		}
    error_reporting(0);
    $stat=$_GET['stat'];
    if($stat=='done')
    echo '<script>alert("Deletion done")</script>';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html lang="en">
<head>
<link rel="icon" href="icons/favicon.ico"/>
    <title>Bluepen &mdash; Write Assignments</title>
    <meta name="google-signin-client_id" content="103240549634-opo6tt4qgpnuq22fkicmdj7il8opogas.apps.googleusercontent.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/style1.css">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  <link rel="stylesheet" href="css/nav.css">

    <script src="js/nav.js"></script>
    <style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  tr {background-color: white;}
  td {
    height: 50px;
    font-size: 20px !important;
    text-align: center;
  }
  th{
    background-color: #394a59;
    color: white !important;
  }
  .custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1.5rem !important;
    height: 1.5rem !important;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
}
  .custom-control-label::after {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 2rem !important;
    height: 1.2rem !important;
    content: "";
    background: no-repeat 80%/150% 128% !important;
  }
</style>
</head>
  <body>
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    <nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <div class="col-6 col-md-3 col-xl-3  d-block">
           <img src="images/logo.png" class="img-fluid" style="width:70%" style="height:70%">
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewclients.php">View Clients</a>
            </li>
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            View Jobs
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="viewjobs.php">Handwriten</a>
              <a class="dropdown-item" href="viewcontentwriting.php">Content writing</a>
              <a class="dropdown-item" href="viewtyping.php">Typing job</a>
            </div>
          </li>
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            View Writers
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="viewwriters.php">Writer</a>
              <a class="dropdown-item" href="viewcontentwriter.php">Content writer</a>
              <!-- <a class="dropdown-item" href="viewtyping.php">Typing job</a> -->
            </div>
          </li>
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Dump
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="dump_jobs.php">Dump Jobs</a>
              <a class="dropdown-item" href="dump_writer.php">Dump writer</a>
              <!-- <a class="dropdown-item" href="viewtyping.php">Typing job</a> -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newsletter.php">News Letter</a>
          </li>
           <!-- <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Dropdown link
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
              <a class="dropdown-item" href="#">Link 4</a>
              <a class="dropdown-item" href="#">Link 5</a>
              <a class="dropdown-item" href="#">Link 6</a>
            </div>
          </li> -->
          </ul>
          
        </div>
      </nav>
</body>
</html>
