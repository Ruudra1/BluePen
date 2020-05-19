<?php
  session_start();
  if(isset($_SESSION['u_id'])) {
    //User is logged in
    header("Location: index.php");
    exit();
  }
  date_default_timezone_set('Asia/Kolkata');
  if($_GET['et'] == NULL){
    header("Location: forget_password.php?forget=link1");
    exit();
  }
  
    $et=$_GET['et'];
  $today = date("n/j/Y,g:i a");

  if(strtotime($today)>$et){
    header("Location: forget_password.php?forget=exp");
    exit();
  }
  $item=$_GET['item'];
  $id= base64_decode(urldecode($item));
  // foreach($_GET as $loc=>$item)
  //   $_GET[$loc] = base64_decode(urldecode($item));
  //  var_dump($id);

//   include "navbar.php";
?>
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
      if (isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
      } else {
    error_reporting(0);
    //Error Handling
    // $_SERVER['HTTP_HOST'] gives http://localhost
    // $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] givees http://localhost/admissions.php?error EvWatcher
      if ($_SESSION['state'] == 'len') {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Password length should be min 8 
              </div>';
              unset($_SESSION['state']);
      } elseif ($_SESSION['state'] == 'mismatch') {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                Password and confirm password should be same
              </div>';
              unset($_SESSION['state']);
      }
      //Focus on ip tag and add div container


        echo '<div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Reset Password</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form method="POST" class="p-5 bg-white">

              <div class="row form-group">
                
                <div class="col-md-12">
                <label class="text-black">Password</label>
                <input type="password" name="pass" placeholder="Enter Password" class="form-control rounded-0" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Confirm Password</label>
              	<input type="password" name="repass" placeholder="Confirm Password" class="form-control rounded-0" required>
              </div>
              </div>

              <input type="submit" name="submit" value="Reset" formaction="includes/reset.inc.php?id='.$id.'" class="btn btn-primary mr-2 mb-2">
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