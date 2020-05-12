<!-- <!DOCTYPE html> -->
<?php
//   session_start();
  include "navbar.php";
?>

    
    
    <br><br><br>
    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
      <?php
      if (isset($_SESSION['id'])) {
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
              	<label class="text-black">Description</label>
              	<input type="text" name="desc" placeholder="description" class="form-control rounded-0" required>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Name of writer</label>
              	<input type="text" name="name" placeholder="name" class="form-control rounded-0" required>
              </div>
        
              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">About writer</label>
              	<input type="text" name="about" placeholder="about" class="form-control rounded-0" required>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">Bio link of writer</label>
              	<input type="text" name="link" placeholder="link" class="form-control rounded-0" required>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
              	<label class="text-black">related tags</label>
              	<input type="text" name="tags" placeholder="tags" class="form-control rounded-0" required>
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