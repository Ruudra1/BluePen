<script type="text/JavaScript">
function createNewElement() {
    // First create a DIV element.
	var txtNewInputBox = document.createElement('div');
  

    // Then add the content (a new input box) of the element.
	txtNewInputBox.innerHTML = "<input type='text' id='newInputBox'>";
  

    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>
 <?php
 include "navbar1.php";
 include_once "../includes/connect.inc.php";
 $id=$_GET['id'];
 $sql="SELECT * FROM blog WHERE id=$id";
 $result = mysqli_query($conn, $sql);
 $row=mysqli_fetch_array($result);
 
 $sql1="SELECT * FROM blog_writer WHERE id=".$row['w_id'];
 $result1 = mysqli_query($conn, $sql1);
 $row1=mysqli_fetch_array($result1);
    // var_dump($row);
    
    echo '<div class="site-cover site-cover-sm same-height overlay single-page" >
    <div ><img src="../blog/'.$row['main'].'" style="width:100%;"></div>   
    
    </div>
    <center><h1 class="mb-4">'.$row['title'].'</h1></center>
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
            <p>'.$row['des1'].'<p>  
            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
                <img src="../blog/'.$row['img1'].'" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <p>'.$row['des2'].'<p>
              <div class="col-md-12 mb-4">
                <img src="../blog/'.$row['img2'].'" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <p>'.$row['des3'].'<p>
              <div class="col-md-12 mb-4">
                <img src="../blog/'.$row['img3'].'" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <p>'.$row['des4'].'<p>
              <div class="col-md-12 mb-4">
                <img src="../blog/'.$row['img4'].'" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <p>'.$row['des5'].'<p>
            </div>';
            $sql4="SELECT * FROM likes WHERE blog_id=$id";
 $result4 = mysqli_query($conn, $sql4);
 $row4=mysqli_fetch_array($result4);
            if($_SESSION['id']){
            ?>
            
            <p><button class="btn btn-primary"> <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"><a <?php echo 'href="../includes/like.inc.php?id='.$id.'"><font color="white">Like '.$row4['likes'].'</font></a></i></button></p>
            
            ';}
            else{
             echo' <h3> Login to like</h3>';
            }
            // <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>
            // <p>Temporibus quo dolore veritatis doloribus delectus dolores perspiciatis recusandae ducimus, nisi quod, incidunt ut quaerat, magnam cupiditate. Aut, laboriosam magnam, nobis dolore fugiat impedit necessitatibus nisi cupiditate, quas repellat itaque molestias sit libero voluptas eveniet omnis illo ullam dolorem minima.</p>
            // <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla quidem, provident eius quos pariatur maxime sapiente illo nostrum quibusdam aliquid fugiat! Earum quod fuga id officia.</p>
            // <p>Illo magnam at dolore ad enim fugiat ut maxime facilis autem, nulla cumque quis commodi eos nisi unde soluta, ipsa eius aspernatur sint atque! Nihil, eveniet illo ea, mollitia fuga accusamus dolor dolorem perspiciatis rerum hic, consectetur error rem aspernatur!</p>

            // <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p>
           $sql3="SELECT * FROM comments WHERE blog_id=".$id;
           $result3 = mysqli_query($conn, $sql3);
           
           
            echo ' </div>

            
            


            <div class="pt-5">
              <h3 class="mb-5">Comments</h3>
              <ul class="comment-list">';
              while($row3=mysqli_fetch_array($result3)){
                $sql4="SELECT * FROM users WHERE id=".$row3['user_id'];
           $result4 = mysqli_query($conn, $sql4);
           $row4=mysqli_fetch_array($result4);
                

                
              
echo '
                <li class="comment">
                  <div class="vcard">
                  
                  </div>
                  <div class="comment-body">
                    <h3>'.$row4['firstname'].' '.$row4['lastname'].'</h3>
                    <div class="meta">'.$row3['date'].'</div>
                    <p>'.$row3['comments'].'</p>
                    
                    </p>
                  </div>
                  <div id="dynamicCheck">
                  
</div>

<div id="newElementId"></div>

                  
                  ';
                  if($row3['reply_id']!=0){

                 echo ' <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>
                      ';
                  }

              }
                 ?>
             
              <form  <?php echo 'action="../includes/comment.inc.php?id='.$id.'" method="POST" class="p-5 bg-white">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    
                    <input type="text" class="form-control" id="name" placeholder="'.$_SESSION['first'].'">
                  </div>
                  <div class="form-group">
                   
                    <input type="email" class="form-control" id="email" placeholder="'.$_SESSION['email'].'">
                  </div>
                  

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">';
                  if($_SESSION['id']){
                   echo' <input type="submit" value="submit" name="submit" class="btn btn-primary">
                  ';}
                  else{
                    echo "Login to comment";
                  }
                  echo'
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  
                  
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="../blogwriter/'.$row1['img'].'" alt="Image Placeholder" class="img-fluid mb-5">
                <div class="bio-body">
                  <h2>'.$row1['name'].'</h2>
                  <p class="mb-4">'.$row1['des'].'</p>
                  <p><a href="'.$row1['link'].'" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                 
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            
            ';
            $tag=explode(";",$row['tags']);
$count=sizeof($tag);
           echo ' <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">';
              while($count!=0){
                $count--;
                echo'
                <li><a href="#">'.$tag[$count].'</a></li>';
              }
             echo' </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h2>More Related Posts</h2>
          </div>
        </div>

        <div class="row align-items-stretch retro-layout">';
        ?>
          
          
<?php
$sql2="SELECT * FROM blog WHERE tags LIKE '%$tag[0]%' OR tags LIKE '%$tag[1]%' ORDER BY id desc";
// var_dump($sql2);
$result2 = mysqli_query($conn, $sql2);

// var_dump($sql1);
$a=2;
while($row2=mysqli_fetch_array($result2)){
if($a==0)
{
break;
}
  echo '

          <div class="col-md-6">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" >
            <div ><img src="../blog/'.$row2['main'].'" style="width:100%;"></div>
              
              <div class="text text-sm">
                <h2>'.$row2['title'].'</h2>
                <span>'.$row2['date'].'</span>
              </div>
              </div>
            </a>';
            $a--;
            
            }
            ?>
            
             
            
          </div>
        </div>

      </div>
    </div>



<?php  
   include "footer1.php";
   ?>