<!-- <!DOCTYPE html> -->
<?php
include_once "includes/connect.inc.php";
ob_start();
  session_start();
  error_reporting(0);
  if(!isset($_SESSION['id'])) {
    //User is logged in
    header("Location: index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="icon" type="image/png" href="icons/favicon.ico"/>    
<title>Upload Assignment &mdash; Blue Pen</title>
<!--nav -->
 
<?php
// include_once "includes/connect.inc.php";
include "navbar.php";
?>
  <!--nav end-->
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


  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   


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
      } elseif (strpos($url, "signup=asuccess")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:6; url=index.php");
        $id = $_SESSION["id"];
        $result= mysqli_query($conn, "SELECT * FROM assignments WHERE user_id=$id ORDER BY assign_id DESC LIMIT 1;");
        $row = mysqli_fetch_array($result);
        $amount = $row["amount"];
        if($amount<6){
          echo'<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, You will be contacted Soon..</div>';
        }
else{
        
         echo'<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, <h3><b> The estimated amount is  '.$amount.'</b></h3> You will be contacted Soon..</div>';
      } }elseif (strpos($url, "signup=tsuccess")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:6; url=index.php");
        $id = $_SESSION["id"];
        $result= mysqli_query($conn, "SELECT * FROM assignments WHERE user_id=$id ORDER BY assign_id DESC LIMIT 1;");
        $row = mysqli_fetch_array($result);
        $amount = $row["amount"];
        if($amount<10){
          echo'<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, You will be contacted Soon..</div>';
        }
        else{
         echo'<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, <h3><b> The estimated amount is  '.$amount.'</b></h3> You will be contacted Soon..</div>';
      } }elseif (strpos($url, "signup=success")!== false) {
        // Wait for 5 seconds and then redirect user to login page
        header("refresh:6; url=index.php");
         echo'<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4  container text-center alert alert-success">Assignment Submitted, You will be contacted Soon..</div>';
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
                <li class="active"><a data-toggle="tab" href="#home">Hand</a></li>
                <li><a data-toggle="tab" href="#menu1">Content</a></li>
                <li><a data-toggle="tab" href="#menu2">Typing</a></li>
              </ul>
              
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <br><br>
                  <h3>Upload Assignments To Be Hand Written Here</h3>
                  
                  <br><br>
                  
              
                  <div class="form-group">
                  
                  <label for="exampleFormControlSelect1">Note: Assignment will be written on A4 or A3 page as per availability<br>Ink Color</label>
                    <select class="form-control" value="'.$_SESSION['ink'].'" name="ink" id="exampleFormControlSelect1">
                                            <option>Choose an ink color</option>    
                                            <option <?php if($_SESSION['ink']=='Blue') echo 'selected';  ?>>Blue</option>
                                            <option <?php if($_SESSION['ink']=='Black') echo 'selected';  ?>>Black</option>
                                        </select>
                               
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
                  <h3>Content Writing Assignments Here</h3>
                  
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
                        <label class="text-black" >Description</label> 
                        <textarea name="message"  cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                    
                      </div>
                    </div>
                    <div class="form-group">
                  <label for="exampleFormControlSelect1">No of Words</label>
                   <select class="form-control" selectedvalue="'.$_SESSION['words'].'" name="words" id="exampleFormControlSelect1">
                                            <option>Choose no of words</option>    
                                            <option <?php if($_SESSION['words']=='400 words') echo 'selected';  ?>>400 words</option>
                                            <option <?php if($_SESSION['words']=='400-600 words') echo 'selected';  ?>>400-600 words</option>
                                            <option <?php if($_SESSION['words']=='600-800 words') echo 'selected';  ?>>600-800 words</option>
                                            <option <?php if($_SESSION['words']=='800-1200 words') echo 'selected';  ?>>800-1200 words</option>
                                        </select>
                                
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
                <div id="menu2" class="tab-pane fade">
                  

                  <br><br>
                  <h3>Typing Assignments here</h3>
                  
                  <br><br>
                  
              
                
                    
      
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="subject">Title</label> 
                      <?php  if(isset($_SESSION['formFilled2']))
                                echo'<input type="subject" id="subject" name="title1" value="'.$_SESSION['title1'].'" placeholder="Title" class="form-control rounded-0" name="subject">';
                              else
                                echo'<input type="subject" id="subject" name="title1" placeholder="Title" class="form-control rounded-0" name="subject">'; ?>
                      </div>
                    </div>
      
                    <!-- <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Description</label> 
                        <textarea name="message1" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                      </div>
                    </div> -->

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Orientation</label>
                      <?php
                      if(isset($_SESSION['formFilled2']))
                          echo'<select class="form-control" value="'.$_SESSION['orientation'].'" name="orientation" id="exampleFormControlSelect1">
                          ';
                      else
                          echo'<select class="form-control" name="orientation" id="exampleFormControlSelect1">'; ?>
                      <option value="Potrait">Potrait</option>
                        <option value="Landscape">Landscape</option>  
                        
                      </select>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-black" for="subject">Font</label>
                        <?php
                      if(isset($_SESSION['formFilled2']))
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="font" placeholder="Font"  value="'.$_SESSION['font'].'"><br>';
                      else
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="font" placeholder="Font"><br>'; 

                      if(isset($_SESSION['formFilled2']))
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="fontsize" placeholder="Font Size"  value="'.$_SESSION['fontsize'].'"><br>';
                      else
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="fontsize" placeholder="Font Size"><br>';
                          
                      if(isset($_SESSION['formFilled2']))
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="fontcolor" placeholder="Font Color"  value="'.$_SESSION['fontcolor'].'">';
                      else
                          echo'<input type="subject" id="subject" class="form-control rounded-0" name="fontcolor" placeholder="Font Color">';    
                      
                          ?> 
                        <!-- <input type="subject" id="subject" class="form-control rounded-0" name="font" placeholder="Font"><br> -->
                        
                      </div>
                    </div>

                    

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Page Size</label>
                      <?php
                      if(isset($_SESSION['formFilled2']))
                          echo' <select class="form-control" name="pagesize" value="'.$_SESSION['pagesize'].'" id="exampleFormControlSelect1">';
                      else
                          echo' <select class="form-control" name="pagesize" id="exampleFormControlSelect1">'; ?>
                     
                        <option>A4</option>
                        <option>A3</option>
                        <option>A5</option>
                        <option>US Letter</option>
                        <option>US Legal</option>
                        <option>B5</option>
                        <option>Jiss B5</option>
                        <option>Envelope</option>
                        <option>Envelope DL</option>
                        <option>Tabaloid</option>
                        <option>Tabaloid Oversize</option>
                        <option>ROC 16k</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Margins</label>
                      <?php
                      if(isset($_SESSION['formFilled2']))
                          echo' <select class="form-control" name="margins" value="'.$_SESSION['margins'].'" id="exampleFormControlSelect1">';
                      else
                          echo' <select class="form-control" name="margins" id="exampleFormControlSelect1">'; ?>
                      <!-- <select class="form-control" id="exampleFormControlSelect1"> -->
                        <option>Normal</option>
                        <option>Narrow</option>
                        <option>Moderate</option>
                        <option>Wide</option>
                        <option>Mirrored</option>
                        
                      </select>
                    </div>

                    
                    <label for="example-date-input" class=" col-form-label">Delivery Date</label>
                <div class="form-group row"> 
                  <div class="col-12">

                 <?php if(isset($_SESSION['formFilled1']))
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate2" class="form-control" value="'.$_SESSION['deliverydate1'].'" placeholder="Delivery Date"/>';
                              else
                                echo'<input type="date" min = "'.$accdate.'" max = "'.$subdate.'" name="deliverydate2" class="form-control" placeholder="Delivey Date"/>';
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload file</label>
                  <input name="assignment1" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted">sample text

                  </small>
                </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit3" value="Submit" formaction="includes/uploadassignment.inc.php" class="btn btn-primary mr-2 mb-2" value="Submit">
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
