<!-- <!DOCTYPE html> -->
<?php
  session_start();
  error_reporting(0);
  include "navbar.php";
  // if(isset($_SESSION['u_id'])) {
  //   //User is logged in
  //   header("Location: index.php");
  //   exit();
  // }
?>
<html lang="en">
  <head>
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
    <title>Signup &mdash; Blue Pen</title>
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
    //Error Handling
    // $_SERVER['HTTP_HOST'] gives http://localhost
    // $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] givees http://localhost/admissions.php?error EvWatcher
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($url, "signup=empty") !== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Fill out all the fields!
              </div>';
      } elseif (strpos($url, "signup=invalid")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Invalid Characters in Name
              </div>';
      } elseif (strpos($url, "signup=email")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Invalid Email
              </div>';
      } elseif (strpos($url, "signup=taken")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                User already exists
              </div>';
      } elseif (strpos($url, "signup=pass")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                The passwords do not match
              </div>';
      } elseif (strpos($url, "signup=len")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Password too short (min. 8 char)
              </div>';
      } elseif (strpos($url, "signup=contact")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Invalid Phone no
              </div>';
      } elseif (strpos($url, "signup=address")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
                Address too long (max. 70)
              </div>';
      } elseif (strpos($url, "signup=success")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        // header("Refresh: 5; URL=index.php");
        echo '<script> setTimeout(function() { window.location = "index.php"; }, 5000); </script>
        <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success">Account created successfully...</div>
       <div>setTimeout()</div>';
        // header("refresh:5;url=index.php");
      }
      //Focus on ip tag and add div container

    ?>

        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Sign Up</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="includes/signup.inc.php" method="POST" class="p-5 bg-white" enctype="multipart/form-data">
              
              <h2 class="h4 text-black mb-5">Sign Up Form</h2> 
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="text" name="firstname" id="fname" value="'.$_SESSION['firstname'].'" class="form-control rounded-0" placeholder="Enter Your First Name" required>';
                else
                  echo'<input type="text" name="firstname" id="fname" class="form-control rounded-0" placeholder="Enter Your First Name" required>';
                ?>
                  <!-- <input type="text" name="firstname" id="fname" class="form-control rounded-0" placeholder="Enter Your First Name"> -->
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="text" name="lastname" id="lname" value="'.$_SESSION['lastname'].'" class="form-control rounded-0" placeholder="Enter Your Last Name" required>';
                else
                  echo'<input type="text" name="lastname" id="lname" class="form-control rounded-0" placeholder="Enter Your Last Name" required>';
                ?>
                  <!-- <input type="text" name="lastname" id="lname" class="form-control rounded-0" placeholder="Enter Your Last Name"> -->
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="number">Mobile Number</label>
                  <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="tel" id="phone" name="contact" value="'.$_SESSION['contact'].'" class="form-control rounded-0" placeholder="Enter Your Mobile Number" required>';
                else
                  echo'<input type="tel" id="phone" name="contact"  class="form-control rounded-0" placeholder="Enter Your Mobile Number" required>';
                ?>
                  <!-- <input type="tel" id="phone" name="contact"  class="form-control rounded-0" placeholder="Enter Your Mobile Number"> -->
                </div>    
              </div>

              <label for="cname" class="text-black">College Name</label>
              <?php
                if(isset($_SESSION['formFilled'])){
                  echo'<input type="text" id="cname" name="college" value="'.$_SESSION['college'].'" class="form-control rounded-0" placeholder="Enter Your College';
                  echo "'";
                  echo 's Name" required><br>';  }
                else{
                  echo'<input type="text" id="cname" name="college" class="form-control rounded-0" placeholder="Enter Your College';
                  echo "'";
                  echo 's Name" required><br>';  }
                ?>
              <!-- <input type="text" id="cname" name="college" class="form-control rounded-0" placeholder="Enter Your College's Name"><br> -->

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="email" id="email" name="email" value="'.$_SESSION['email'].'" class="form-control rounded-0" placeholder="Enter Your Email" required>';
                else
                  echo'<input type="email" id="email" name="email" class="form-control rounded-0" placeholder="Enter Your Email" required>';
                ?>
                  <!-- <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="Enter Your Email"> -->
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="pwd">Password</label> 
                  <input type="password" id="pwd" name="pass" class="form-control rounded-0" placeholder="Enter Password (min.8)" required><br>
                  <input type="password" name="repass" placeholder="Confirm Password" class="form-control rounded-0" required>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="address">Address</label> 
                  <textarea name="address" id="address" cols="30" rows="7" class="form-control rounded-0" placeholder="Enter Your Address" required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="reset" class="btn btn-primary mr-2 mb-2"> <input type="submit" name="submit" value="Register" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>

            </form>
          </div>
        
        </div>
        
      </div>
    </div>

    <!--contact end-->


    <!-- Footer -->
<?php
include "footer.php";
?>
