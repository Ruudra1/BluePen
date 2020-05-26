<html lang="en">
  <head>
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
    <title>Blue Pen</title>
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
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
      <?php
      session_start();
      if (isset($_SESSION['id'])) {
        error_reporting(0);

    //Error Handling
    // $_SERVER['HTTP_HOST'] gives http://localhost
    // $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] givees http://localhost/admissions.php?error EvWatcher
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($url, "changepassword=same") !== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Old password and New password are same
              </div>';
    //   } elseif (strpos($url, "signup=pass")!== false) {
        // echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                // The passwords do not match
            //   </div>';
      } elseif (strpos($url, "changepassword=len")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Password too short (min. 8 char)
              </div>';
    } elseif (strpos($url, "changepassword=wrongpassword")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Old Password is Wrong
                </div>';
      }elseif (strpos($url, "changepassword=pass")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                New Password and Confirm Password should match
                </div>';
      } elseif (strpos($url, "changepassword=success")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:3; url=index.php");
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success">Password changed Succesfully</div>';
      }
      //Focus on ip tag and add div container
       
            echo '<div class="row mb-5">
              <div class="col-12 text-center">
                <h2 class="section-title mb-3 text-white">Change Password</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-7 mb-5">
    
                
    
                <form method="POST" class="p-5 bg-white">
    
                  <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black">Old Password</label>
                    <input type="password" name="oldpass" placeholder="Enter Password" class="form-control rounded-0" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                    <label class="text-black">New Password</label>
                    <input type="password" name="newpass" placeholder="Enter Password" class="form-control rounded-0" required>
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label class="text-black">Confirm Password</label>
                      <input type="password" name="cpass" placeholder="Confirm Password" class="form-control rounded-0" required>
                  </div>
                  </div>
    
                  <input type="submit" name="submit" value="Reset" formaction="includes/changepassword.inc.php" class="btn btn-primary mr-2 mb-2">
                </form>
              </div>
            
            </div>
            
          </div>
        </div>'; 
      } else {
        header("Location: index.php");
        exit();
     } ?>
  
    <!-- contact end-->

 <!-- Footer -->
<?php
include "footer.php";
?>