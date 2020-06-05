<!-- <!DOCTYPE html> -->
<?php
  // session_start();
?>
<html lang="en">
  <head>
  
  <!-- Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164646889-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164646889-1');
</script>
<!-- End Google Tag Manager -->

<link rel="icon" type="image/png" href="icons/favicon.ico"/>
    <title>Login &mdash; Blue Pen</title>
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
  <body data-spy="scroll" data-offset="300">
  <?php
  // include_once "includes/connect.inc.php";
  include "navbar.php";
  ?>


  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <br><br><br>
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/img_2.jpg');">
      <div class="container">
      <?php
      if (isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
      } else {
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($url, "login=error") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  Invalid Email / Password
                </div>';
        } elseif (strpos($url, "login=empty") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  Fill out all the fields!
                </div>';
        } elseif (strpos($url, "login=blocked") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  User Blocked, Please contact us to continue
                </div>';
        } elseif (strpos($url, "forget=link") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success" role="alert">
                  Link Generated !!!
                </div>';
        } elseif (strpos($url, "forget=success") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success" role="alert">
                  Password updated
                </div>';
        }

        echo '<div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Login</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="includes/login.inc.php" method="POST" class="p-5 bg-white">

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Password</label>
              	<input type="password" name="pass" placeholder="Enter Password" class="form-control rounded-0" required>
              </div>
        
              </div>
              <input type="submit" name="submit" value="Login" class="btn btn-primary mr-2 mb-2">
              <br><a class="mr-2 mb-2" href="signup.php">Not a member? SignUp</a>
              <br><a class="mr-2 mb-2" href="forget_password.php">Forget password ?</a>
            </form>
          </div>
        
        </div>
        
      </div>
    </div>';
      }?>

    <!--contact end-->

 <!-- Footer -->
<?php
include "footer.php";
?>