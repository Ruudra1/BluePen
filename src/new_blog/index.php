<?php
include_once "../includes/connect.inc.php";
include "navbar1.php";
$sql="SELECT * FROM blog ORDER BY id desc";
$result = mysqli_query($conn, $sql);
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BluePen-Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="site-wrap"  > 

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <br><br>
    <h1 class="text-center">Blue Pen Blogs</h1>
    <br><br>
    

   
<?php
$a=12;
echo '
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
          </div>
        </div>
        <div class="row">';
        while($row=mysqli_fetch_array($result)){
// var_dump($row['des1']);
          $sql1="SELECT * FROM blog_writer WHERE id=".$row['w_id'];
          $result1 = mysqli_query($conn, $sql1);
          $row1=mysqli_fetch_array($result1);

            $tag=explode(";",$row['tags']);
            if($a==0)
        break;
        $a--;
        echo '  <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.php?id='.$row['id'].'"><img src="../blog/'.$row['main'].'" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">'.$tag[0].'</span>

              <h2><a href="single.php?id='.$row['id'].'">'.$row['title'].'</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="../blogwriter/'.$row1['img'].'" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">'.$row1['name'].'</a></span>
                <span>&nbsp;-&nbsp; '.$row['date'].'</span>
              </div>';
              $sql6="SELECT LEFT(`des1`,50) AS j FROM blog WHERE id=".$row['id'];
$result6 = mysqli_query($conn, $sql6);
$row6=mysqli_fetch_array($result6);

echo'
                <p>'.$row6['j'].'</p>
                <p><a href="single.php?id='.$row['id'].'">Read More</a></p>
              </div>
            </div>
            </div>
            '; }
            ?>
          </div>
        </div>
      </div>          
    </div>
  </div>
</div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


  </body>
</html>
<?php
include "footer1.php";
?>