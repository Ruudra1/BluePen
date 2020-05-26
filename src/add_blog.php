<!-- <!DOCTYPE html> -->
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
<?php
  session_start();
  error_reporting(0);
  if(!strcmp("admin",$_SESSION['privilege'])==0)
{
  header("Location:index.php");
  exit();
}
  include "navbar.php";
  $sql = "SELECT * FROM blog_writer ;";
            $result = mysqli_query($conn, $sql);
            


?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
    
    <br><br><br>
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
      <?php
      if (0) {
        header("Location: index.php");
        exit();
      } else {
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($url, "error=maininvalid") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  Invalid main image
                </div>';
        } elseif (strpos($url, "error=img1invalid") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  image 1 invalid
                </div>';
        } elseif (strpos($url, "error=img2invalid") !== false) {
            echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                    image 2 invalid
                  </div>'; 
        } elseif (strpos($url, "error=img3invalid") !== false) {
            echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                    image 3 invalid
                  </div>';
        
        }
        
        
        elseif (strpos($url, "error=sampleupload") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
                  Couldnt upload file
                </div>';
        } elseif (strpos($url, "error=success") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success" role="alert">
                  Blog added succesfully
                </div>';
        }
    }
?>
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Add blog</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="includes/add_blog.inc.php" method="POST" class="p-5 bg-white" enctype="multipart/form-data">

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" >Title</label> 
                  <input type="text" name="title" class="form-control rounded-0" placeholder="Title" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Description 1</label>
              	<input type="text" name="desc1" placeholder="description" class="form-control rounded-0" required>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Description 2</label>
              	<input type="text" name="desc2" placeholder="description" class="form-control rounded-0" required>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Description 3</label>
              	<input type="text" name="desc3" placeholder="description" class="form-control rounded-0" required>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Description 4</label>
              	<input type="text" name="desc4" placeholder="description" class="form-control rounded-0" required>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Description 5</label>
              	<input type="text" name="desc5" placeholder="description" class="form-control rounded-0" required>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Writers</label>
              <select input type ="text" name = "writer" <?php echo 'value="'.$_SESSION['writer'].'"'; ?>>
              <?php
              while($row=mysqli_fetch_array($result)){
                echo'<option>
              '.$row['name'].' 
              
                </option>'; } ?>
              </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">related tags</label>
              	<input type="text" name="tags" placeholder="use semi-colon between 2 tags" class="form-control rounded-0" required>
              </div>

              <div class="row form-group col-md-12">
                  <label class="text-black">Main image</label> 
                  <input class="form-control rounded-0" type="file" name="main" required>
                </div>
                <div class="row form-group col-md-12">
                  <label class="text-black">image 1</label> 
                  <input class="form-control rounded-0" type="file" name="img1" required>
                </div>

                <div class="row form-group col-md-12">
                  <label class="text-black">image 2</label> 
                  <input class="form-control rounded-0" type="file" name="img2" required>
                </div>

                <div class="row form-group col-md-12">
                  <label class="text-black">image 3</label> 
                  <input class="form-control rounded-0" type="file" name="img3" required>
                </div>
                <div class="row form-group col-md-12">
                  <label class="text-black">image 4</label> 
                  <input class="form-control rounded-0" type="file" name="img4" required>
                </div>

                


              </div>
              <input type="submit" name="submit" value="submit" class="btn btn-primary mr-2 mb-2">
              <!-- <br><a class="mr-2 mb-2" href="signup.php">Not a member? SignUp</a> -->
            </form>
          </div>
        
        </div>
        
      </div>
    </div>
</div>


    <!--contact end-->


    <!--footer-->

    
      <?php  
      include "footer.php";
      ?>