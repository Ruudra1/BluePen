<?php
include_once "../includes/connect.inc.php";
include "navbar1.php";
$sql="SELECT * FROM blog ORDER BY id desc";
$result = mysqli_query($conn, $sql);
  
?>
<?php

echo '<br><br>
<h1 class="text-center" style="margin-top:9%;">Blue Pen Blogs</h1>
<br><br>

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
              $sql6="SELECT LEFT(`des1`,300) AS j FROM blog WHERE id=".$row['id'];
              $result6 = mysqli_query($conn, $sql6);
              $row6=mysqli_fetch_array($result6);

                echo'
                <p>'.$row6['j'].'...</p>
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

  
<?php
include "footer1.php";
?>