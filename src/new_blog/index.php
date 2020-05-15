<?php
include_once "../includes/connect.inc.php";
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
    
    <!-- <div class="site-section bg-light">
      <div class="container">
        <h2 class="text-left">Our Trending Blogs</h2>
        <br><br>
        <div class="row align-items-stretch retro-layout">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
              <span class="post-category text-white bg-danger">Travel</span>
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div>

          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
              <span class="post-category text-white bg-success">Nature</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
                <span class="post-category text-white bg-primary">Sports</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                <span class="post-category text-white bg-warning">Lifestyle</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>

      </div> 
    </div>-->
   
<?php
$a=12;
echo '
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">';
        while($row=mysqli_fetch_array($result)){

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
              </div>
              
                <p>'.$row['des'].'</p>
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
        
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   


    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_1.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('images/img_2.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry img-5 h-100 gradient" style="background-image: url('images/img_v_1.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">Travel</span>
                  <span class="post-category bg-primary">Food</span>
                </div>
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_3.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('images/img_4.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    
    
    
    
    
  </div> -->

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