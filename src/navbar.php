<?php
include_once "includes/connect.inc.php";
session_start();
error_reporting(0);
init_e  
?>
<!DOCTYPE html>
<!-- <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style> -->
<html lang="en">
  <head>
    <title>Bluepen &mdash; Write Assignments</title>
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
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

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
          
          <div class="col-6 col-md-3 col-xl-3  d-block">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0" style="padding-left:15px;">Blue Pen<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-9 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0" style="padding-right:10px;">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <!-- <li><a href="#features-section" class="nav-link">Features</a></li> -->
                <!-- <li class="has-children"> -->
                  <li><a href="works.html" class="nav-link">How it works</a></li>
                  <!-- <ul class="dropdown arrow-top"> -->
                    <!-- <li><a href="#our-team-section" class="nav-link">Our Team</a></li> -->
                    <!-- <li class="has-children"> -->
                      <!-- <a href="#">More Links</a> -->
                      <!-- <ul class="dropdown"> -->
                        <!-- <li><a href="#">Menu One</a></li> -->
                        <!-- <li><a href="#">Menu Two</a></li> -->
                        <!-- <li><a href="#">Menu Three</a></li> -->
                      <!-- </ul> -->
                    <!-- </li> -->
                  <!-- </ul> -->
                <!-- </li> -->
                <!-- <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li> -->
                <li><a href="new_blog/index.html" class="nav-link">Blog</a></li>
                <li><a href="Contact Dummy.html" class="nav-link">Contact</a></li>
                <!-- <li><a href="#" class="nav-link">Upload Assignment</a></li> -->
                <?php
                if($_SESSION['first']==NULL){
                 echo '<li><a class="nav-link" href="#" data-toggle="modal" target="_blank" data-target="#signupmodal"><span >Sign Up</span></a></li>';
                 echo '<li><a data-toggle="modal" href="#" style="" class="nav-link" data-target="#loginmodal">Login</a></li>';
                 echo '<li data-toggle="modal" data-target="#writermodal" style="color:black" class="nav-link"><a>Register as Writer</a></li>';
                }
                else{
                  if(strcmp($_SESSION['privilege'], "admin")!=0){
                    echo '<li class="has-children">
                    <a href="#about-section" class="nav-link"><span>HI , '.$_SESSION['first'].'</span></a>';
                    
                   echo '<ul class="dropdown arrow-top">
                   
                   <li><a href="uploadassignment.php" target="_blank" class="nav-link"><span class="text-secondary">Submit Assignment </span></a></li>
                    <li><a href="changepassword.php" target="_blank" class="nav-link"><span class="text-secondary">Change Password  </span></a></li>
                    <li><a href="includes/logout.inc.php" target="_blank" class="nav-link"><span class="text-secondary">Log Out </span></a></li></ul></li>
                    <li><a href="" data-toggle="modal" data-target="#writermodal" target="_blank" class="nav-link"><span class="">Register as Writer</span></a></li>';
                  }
                 elseif(strcmp($_SESSION['privilege'],"admin")==0){
                  echo '<li class="has-children">
                  <a href="#about-section" class="nav-link"><span>HI , '.$_SESSION['first'].'</span></a>';
                  
                 echo '<ul class="dropdown arrow-top">
                 <li><a href="viewwriters.php" target="_blank" class="nav-link"><span class="text-secondary">View Writers</span></a></li>
                  <li><a href="viewclients.php" target="_blank" class="nav-link"><span class="text-secondary">View Clients</span></a></li>
                  <li><a href="viewjobs.php" target="_blank" class="nav-link"><span class="text-secondary">View Jobs</span></a></li>
                  <li><a href="includes/logout.inc.php" target="_blank" class="nav-link"><span class="text-secondary">Log Out </span></a></li>';
                  }
<<<<<<< HEAD
                  else{
                    // echo '<li data-toggle="modal" data-target="#writermodal" style="color:black" class="nav-link"><a>Register as Writer</a></li>';
                  }
=======
                  
>>>>>>> 839359d5c9cf2dc61ce2eead332aba961817e851
            
          }



                //    echo ' <li class="menu-has-children ">
                //     <a href="#">hi, '.$_SESSION['first'].'</a>
                //     <ul>';
                //   echo '<li>
                //           
                //         </li>
                //         <li>
                //          
                //         </li>';
                
                ?>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <li><a href="registeraswriter.html" class="nav-link">Register as Writer</a></li> -->
                <li data-toggle="modal" data-target="#writermodal" style="color:black" class="nav-link"><a>Register as Writer</a></li>

                  

              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right" style="padding-right:15px;"><span class="icon-menu h3"></span></a></div>

        </div>
      <!-- </div> -->
      
    </header>
    
    <!--nav end-->

    <!-- Writer Modal -->
    <div class="modal fade" id="writermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register as Writer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-secondary">Google Signup button here</button>
            <button type="button" class="btn btn-primary"><a href="registerwriter.php">Sign Up using email</a></button>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary">Google Signup button here</button> -->
            <!-- <button type="button" class="btn btn-primary"><a href="registeraswriter.html">Sign Up using email</a></button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Writer modal ends -->

    <!-- Signup Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-secondary">Google Signup button here</button>
            <button type="button" class="btn btn-primary"><a href="signup.php">Sign Up using email</a></button>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary">Google Signup button here</button> -->
            <!-- <button type="button" class="btn btn-primary"><a href="registeraswriter.html">Sign Up using email</a></button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Signup modal ends -->

    <!-- Login Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-secondary">Google Signup button here</button>
            <button type="button" class="btn btn-primary"><a href="login.php">Sign Up using email</a></button>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary">Google Signup button here</button> -->
            <!-- <button type="button" class="btn btn-primary"><a href="registeraswriter.html">Sign Up using email</a></button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Login modal ends -->


    <!-- <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
         <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
            
            <img src="images/undraw_investing_7u74.svg" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>Make Your Business More Profitable</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div> 
            </div>

          </div>
        </div> 
      </div>
    </div>   -->
