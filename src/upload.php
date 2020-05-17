<!-- <!DOCTYPE html> -->
<?php
ob_start();
  session_start();
  error_reporting(0);
  if(!isset($_SESSION['id'])) {
    //User is logged in
    header("Location: index.php");
    exit();
  }
?>
<html lang="en">
  <head>
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
    <title>imagine &mdash; Onepage Template by Colorlib</title>
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
      } elseif (strpos($url, "signup=fileinvalid")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid File
              </div>';
      } elseif (strpos($url, "signup=deliverydate")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid Date of Delivery
              </div>';
      }  elseif (strpos($url, "signup=uploadissue")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Uploading Failed !!!
              </div>';
      } elseif (strpos($url, "signup=signupload")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                Invalid File
              </div>';
      } elseif (strpos($url, "signup=success")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:5; url=index.php");
        // $id = $_SESSION["id"];
        // $result= mysqli_query($conn, "SELECT * FROM assignments WHERE user_id=$id ORDER BY assign_id DESC LIMIT 1;");
        // $row = mysqli_fetch_array($result);
        // $amount = $row["amount"];
        // $amount = "SELECT amount FROM assignments WHERE user_id=6 ORDER BY assign_id DESC LIMIT 1";
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, You will be contacted Soon..</div>';
      } elseif (strpos($url, "signup=blocked")!== false) {
        echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger lastname" role="alert">
                User is Blocked, Please Contact Us
              </div>';
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
                <li class="active"><a data-toggle="tab" href="#home">Hand-written</a></li>
                <li><a data-toggle="tab" href="#menu1">Content Writing</a></li>
                
              </ul>
              
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <br><br>
                  <h3>Upload Assignments Here</h3>
                  
                  <br><br>
                  
              
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Ink Color</label>
                    <?php
                                    error_reporting(0);
                                    if(isset($_SESSION['formFilled']))
                                        echo'<select class="form-control" value="'.$_SESSION['ink'].'" name="ink" id="exampleFormControlSelect1">
                                            <option>Choose an ink color</option>    
                                            <option>Blue</option>
                                            <option>Black</option>
                                        </select>
                                        </select>';
                                    else
                                        echo'<select class="form-control" name="ink" id="exampleFormControlSelect1">
                                            <option>Choose an ink color</option>
                                            <option>Blue</option>
                                            <option>Black</option>
                                        </select>
                                        </select>';
                                ?>
                </div>
                <label for="example-date-input" class=" col-form-label">Delivery Date</label>
                <div class="form-group row">
                  
                  <div class="col-12">
                    <?php
                              // error_reporting(0);
                              $accdate = Date('Y-m-d', strtotime('+3 days'));
                              $subdate = Date('Y-m-d', strtotime('+12 days'));
                              // var_dump($accdate);
                              // var_dump($subdate);
                              if(isset($_SESSION['formFilled']))
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate" class="form-control" value="'.$_SESSION['deliverydate'].'" placeholder="Delivery Date"/>';
                              else
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate" class="form-control" placeholder="Delivey Date"/>';
                    ?>  
                  </div>
                </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Upload assignment</label>
                      <input type="file" name="assignment" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" accept=".pdf">
                      <small id="fileHelp" class="form-text text-muted">In PDF Format Only

                      </small>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit1" formaction="includes/uploadassignment.inc.php" value="Submit" class="btn btn-primary mr-2 mb-2" value="send">
                      </div>
                    </div>
      
        
                  


                </div>
                <div id="menu1" class="tab-pane fade">
                  

                  <br><br>
                  <h3>Content Writing</h3>
                  
                  <br><br>
                  
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="subject">Title</label>
                        <?php
                    if(isset($_SESSION['formFilled1']))
                                echo'<input type="subject" id="subject" name="title" value="'.$_SESSION['title'].'" placeholder="Title" class="form-control rounded-0" name="subject">';
                              else
                                echo'<input type="subject" id="subject" name="title" placeholder="Title" class="form-control rounded-0" name="subject">';
                    ?> 
                        
                      </div>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Description</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                    
                      </div>
                    </div>
                    
                    <label for="example-date-input" class=" col-form-label">Delivery Date</label>
                <div class="form-group row">
                  
                  <div class="col-12">
                  <?php
                              // error_reporting(0);
                              $accdate = Date('Y-m-d', strtotime('+3 days'));
                              $subdate = Date('Y-m-d', strtotime('+12 days'));
                              // var_dump($accdate);
                              // var_dump($subdate);
                              if(isset($_SESSION['formFilled1']))
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate1" class="form-control" value="'.$_SESSION['deliverydate1'].'" placeholder="Delivery Date"/>';
                              else
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate1" class="form-control" placeholder="Delivey Date"/>';
                    ?>  
                  </div>
                </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit2" formaction="includes/uploadassignment.inc.php"  value="Submit" class="btn btn-primary mr-2 mb-2" value="Submit">
                      </div>
                    </div>
      


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

    

     <!-- Footer -->
<?php
include "footer.php";
?>
<?php  ob_end_flush();  ?>
