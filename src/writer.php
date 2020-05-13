<!-- <!DOCTYPE html> -->
<?php
ob_start();
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
    <title>BluePen</title>
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
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
    
    <!--nav end-->


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


    <!--contact start-->
    <br><br><br>
    
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/img_2.jpg');">
      <div class="container">

      
        
        <div class="row justify-content-center">
          <?php
    //Error Handling
    // $_SERVER['HTTP_HOST'] gives http://localhost
    // $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] givees http://localhost/admissions.php?error EvWatcher
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($url, "signup=empty") !== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
                Fill out all the fields!
              </div>';
      } elseif (strpos($url, "signup=invalid")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid Characters in Name
              </div>';
      } elseif (strpos($url, "signup=email")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid Email
              </div>';
      } elseif (strpos($url, "signup=taken")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                User already exists
              </div>';
      } elseif (strpos($url, "signup=contact")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid Phone no
              </div>';
      } elseif (strpos($url, "signup=sample")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid Sample
              </div>';
      } elseif (strpos($url, "signup=fileinvalid")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid File Type
              </div>';
      } elseif (strpos($url, "signup=address")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Address too long (max. 70)
              </div>';
      } elseif (strpos($url, "signup=success")!== false) {
        // Wait for 5 seconds and then redirect user to index page
        header("refresh:3;url=index.php");
        // exit();
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-success">You are registered as a writer, we will be contacting you soon...</div>';
      }
      //Focus on ip tag and add div container

    ?></div>
        
        <div class="row justify-content-center"> 
        <div class="col-lg-7 mb-5">

            <form class="p-5 bg-white" method="POST" enctype="multipart/form-data">

              <!-- <div class="container">
                
          
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#home">Writer</a></li>
                  
                  <li><a data-toggle="pill" href="#menu2">Content Writer</a></li>
                 
                </ul>
                
                <div class="tab-content">
                 
                  <div id="home" class="tab-pane fade in active">
                    <h3>Writer</h3>
                    <p>put seperate forms for assignment writer, typewriter, content writer<br> Put writer form here</p>


                  
                  </div>
                 
                  <div id="menu2" class="tab-pane fade">
                    <h3>Content Writer</h3>
                    <p>put seperate forms for assignment writer, typewriter, content writer<br> Put Content Writer form here</p>
                  </div>
                 
                  
                </div>
              </div> -->

              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Writer</a></li>
                <li><a data-toggle="tab" href="#menu1">Content Writer</a></li>
                
              </ul>
              
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <br><br>
                  <h3>Register as Writer</h3>
                  
                  <br><br>
                  <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="fname">First Name</label>
                        <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="text" id="fname" name="firstname" class="form-control rounded-0" value="'.$_SESSION['firstname'].'" placeholder="Enter Your First Name" >';
                else
                  echo'<input type="text" name="firstname" class="form-control rounded-0" placeholder="Enter Your First Name" >';
                ?>
                      </div>
                      <div class="col-md-6">
                        <label class="text-black" for="lname">Last Name</label>
                        <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="text" id="lname" name="lastname" class="form-control rounded-0" value="'.$_SESSION['lastname'].'" placeholder="Enter Your Last Name" >';
                else
                  echo'<input type="text" name="lastname" class="form-control rounded-0" placeholder="Enter Your Last Name" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="email">Email</label> 
                        <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="email" name="email" class="form-control rounded-0" value="'.$_SESSION['email'].'" placeholder="Enter Your Email" >';
                else
                  echo'<input type="email" name="email" class="form-control rounded-0" placeholder="Enter Your Email" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="subject">Mobile Number</label> 
                        <?php
                if(isset($_SESSION['formFilled']))
                  echo'<input type="tel" id="phone" name="phone"  value="'.$_SESSION['contact'].'" class="form-control rounded-0" placeholder="Enter Your Mobile Number" >';
                else
                  echo'<input type="tel" id="phone" name="phone"  class="form-control rounded-0" placeholder="Enter Your Mobile Number" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Address</label> 
                        <textarea  name="address" cols="30" rows="5" class="form-control rounded-0" placeholder="Enter Your Address" ></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Hand Writing Sample</label>
                      <input type="file" class="form-control-file" id="exampleInputFile" name="sample" aria-describedby="fileHelp" >
                      <small id="fileHelp" class="form-text text-muted">sample line </small>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit1" formaction="includes/registerwriter.inc.php" value="Register" class="btn btn-primary mr-2 mb-2" >
                        <input type="reset" class="btn btn-primary mr-2 mb-2">
                      </div>
                    </div>
      

                </div>
    </form>
                <div id="menu1" class="tab-pane fade">
              
                  <br><br>
                  <h3>Register as Content Writer</h3>
                  
                  <br><br>
                  
                  <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" >First Name</label>
                        <?php
                if(isset($_SESSION['formFilled1']))
                  echo'<input type="text" name="firstname1" class="form-control rounded-0" value="'.$_SESSION['firstname1'].'" placeholder="Enter Your First Name" >';
                else
                  echo'<input type="text" name="firstname1" class="form-control rounded-0" placeholder="Enter Your First Name" >';
                ?>
                      </div>
                      <div class="col-md-6">
                        <label class="text-black" >Last Name</label>
                        <?php
                        if(isset($_SESSION['formFilled1']))
                  echo'<input type="text" name="lastname1" class="form-control rounded-0" value="'.$_SESSION['lastname1'].'" placeholder="Enter Your Last Name" >';
                else
                  echo'<input type="text" name="lastname1" class="form-control rounded-0" placeholder="Enter Your Last Name" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" >Email</label> 
                        <?php
                if(isset($_SESSION['formFilled1']))
                  echo'<input type="email" name="email1" class="form-control rounded-0" value="'.$_SESSION['email1'].'" placeholder="Enter Your Email" >';
                else
                  echo'<input type="email" name="email1" class="form-control rounded-0" placeholder="Enter Your Email" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" >Mobile Number</label> 
                        <?php
                if(isset($_SESSION['formFilled1']))
                  echo'<input type="tel"  name="phone1"  value="'.$_SESSION['contact1'].'" class="form-control rounded-0" placeholder="Enter Your Mobile Number" >';
                else
                  echo'<input type="tel"  name="phone1"  class="form-control rounded-0" placeholder="Enter Your Mobile Number" >';
                ?>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="address">Address</label> 
                        <textarea  name="address1" cols="30" rows="5" class="form-control rounded-0" placeholder="Enter Your Address" ></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" >Genere</label> 
                        <input type="subject" name="genere"  class="form-control rounded-0" placeholder="Genere" name="subject" >
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" >Language</label> 
                        <input type="subject" name="pref1" class="form-control rounded-0" name="subject" placeholder="Preference 1" >
                      </div>
                      <div class="col-md-12">
                        <br>
                        <input type="subject" name="pref2"  class="form-control rounded-0" name="subject" placeholder="Preference 2" >
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" >Samples</label> 
                        <textarea name="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Show us your creativity here..." ></textarea>
                      </div>
                    </div>

                    <!-- <div class="form-group">
                      <label for="exampleInputFile">Previously written segments</label>
                      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">sample line

                      </small>
                    </div> -->
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit2"  value="Register" formaction="includes/registerwriter.inc.php" class="btn btn-primary mr-2 mb-2">
                        <input type="reset" class="btn btn-primary mr-2 mb-2">
                      </div>
                    </div>
      


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
        <div class="row mb-5">
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
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  
  </body>
</html>
<?php  ob_end_flush();  ?>