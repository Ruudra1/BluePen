<?php
    include_once 'includes/connect.inc.php';
    session_start();
    if(isset($_SESSION['privilege'])) {
      if(strcmp($_SESSION['privilege'], "admin") !== 0) {
          // User is not an admin
          header("Location: index.php");
          exit();
      }
    } else {
      //User is not signed in
      header("Location: index.php");
      exit();
		}
    error_reporting(0);
    $stat=$_GET['stat'];
    if($stat=='done')
    echo '<script>alert("Deletion done")</script>';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bluepen &mdash; Write Assignments</title>
  <link rel="icon" type="image/png" href="icons/favicon.ico"/>
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
    
    <style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  tr {background-color: white;}
  td {
    height: 50px;
    font-size: 20px !important;
    text-align: center;
  }
  th{
    background-color: #394a59;
    color: white !important;
  }
  .custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1.5rem !important;
    height: 1.5rem !important;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
}
  .custom-control-label::after {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 2rem !important;
    height: 1.2rem !important;
    content: "";
    background: no-repeat 80%/150% 128% !important;
  }
</style>
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
           <img src="images/logo.png" class="img-fluid" style="width:70%" style="height:70%">
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="viewclients.php" class="nav-link">View Clients</a></li>
                <li class="has-children">
                  <a href="" class="nav-link">View Jobs</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="viewjobs.php" class="nav-link">Handwriten</a></li>
                    <li><a href="viewcontentwriting.php" class="nav-link">Content writing</a></li>
                    <li><a href="viewtyping.php" class="nav-link">Typing job</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="" class="nav-link">View Writers</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="viewwriters.php" class="nav-link">Writer</a></li>
                    <li><a href="viewcontentwriter.php" class="nav-link">Content writer</a></li>
                    <li><a href="#" class="nav-link">Type writer</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="" class="nav-link">Dump</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="dump_jobs.php" class="nav-link">Dump Jobs</a></li>
                    <li><a href="dump_writer.php" class="nav-link">Dump writer</a></li>
                  </ul>
                </li>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    <!--nav end-->
    <br>
    <div class="site-section  overlay" id="contact-section">
      <div class="container">
      
                 <br><br>
                  <h1>Content Writer</h1>
                  
                  <br><br>
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered">
			<tr>
                <th>ID</th>
                <th>First Name</th>
				<th>Last name</th>
				<th>Mobile no.</th>
				<th>Email</th>
				<th>Address</th>
                <th>Genere</th>
                <th>Language 1</th>
                <th>Language 2</th>
				<th>Sample</th>
        <th>Action</th>

			</tr>
			<?php 	
			$result= mysqli_query($conn, "SELECT * FROM contentwriter");

			while ($row = mysqli_fetch_array($result)){
				echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["firstname"].'</td>
						<td>'.$row["lastname"].'</td>
						<td>'.$row["mobile"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["address"].'</td>
                        <td>'.$row["genere"].'</td>
                        <td>'.$row["lang1"].'</td>
                        <td>'.$row["lang2"].'</td>
						<td>'.$row["samples"].'</td>
            <td><a href="" data-toggle="modal" data-target="#deletemodal'.$row['id'].'" >Delete</a></td>
          </tr>
          <div class="modal fade" id="deletemodal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure ? you want to delete the Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <a href="includes/delete.inc.php?id='.$row['id'].'&u=cw"><button type="button" class="btn btn-primary">Yes</button></a>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            
            </div>
          </div>
        </div>';
					//<button class=\"btn btn-danger\" action=\"test.php\">BLOCK</button>
			} 	
			?>	
	</table>
              
                     
      
                    
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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