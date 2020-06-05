<?php
  session_start();
  error_reporting(0);
?>
<html lang="en">
  <head>
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
    <title>Forget Password &mdash; Blue Pen</title>
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
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
   <!--nav -->
   <?php
  // include_once "includes/connect.inc.php";
  include "navbar.php";
  ?>
  <!--nav ends-->

    
    
    <br><br><br>
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/img_2.jpg');">
      <div class="container">
      <?php
      if (isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
      } else {
        
    //Error Handling
    // $_SERVER['HTTP_HOST'] gives http://localhost
    // $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] givees http://localhost/admissions.php?error EvWatcher
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($url, "forget=email")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Invalid Email
              </div>';
      } elseif (strpos($url, "forget=error")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Some Unknown error occured
              </div>';
      } elseif (strpos($url, "forget=Notfound")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Email is not Registered 
              </div>';
      } elseif (strpos($url, "forget=link1")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
               Generate Link
              </div>';
      } elseif (strpos($url, "forget=exp")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Link Expired !!! 
              </div>';
      } elseif (strpos($url, "signup=success")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:2; url=login.php");
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success">Account created successfully...</div>';
      }
      //Focus on ip tag and add div container


        echo '<div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Forget Password</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="includes/forget_password.inc.php" method="POST" class="p-5 bg-white">

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email" required>
                </div>
              </div>

              <input type="submit" name="submit" value="Submit" class="btn btn-primary mr-2 mb-2">
              <button class="btn btn-primary mr-2 mb-2"><a href="login.php" style="color:white;" >Go to Login Page</a></button>
            </form>
          </div>
        
        </div>
        
      </div>
    </div>';  } ?>
  
    <!-- contact end-->

 <!-- Footer -->
<?php
include "footer.php";
?>