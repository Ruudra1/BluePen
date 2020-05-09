<!-- <!DOCTYPE html> -->
<?php
  session_start();
  error_reporting(0);
  if(isset($_SESSION['u_id'])) {
    //User is logged in
    header("Location: index.php");
    exit();
  }
?>
<html lang="en">
  <head>
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
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">imagine<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#features-section" class="nav-link">Features</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#" target="_blank" class="nav-link"><span class="text-primary">More Free Templates</span></a></li>
                    <li><a href="#our-team-section" class="nav-link">Our Team</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    
    <br><br><br>
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
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
        header("refresh:2; url=login.php");
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success">Account created successfully...</div>';
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


    <!--footer-->

    <div class="footer py-5 text-center">
      <div class="container">
        <div class="row mb-2">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
            </p>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-md-12"> -->