<?php

session_start();
include_once 'connect.inc.php';
// $writer=$_SESSION['writer'];


if (isset($_POST['submit']))
{

    #Treat user input as text and not as code
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $des1 = mysqli_real_escape_string($conn, $_POST['desc1']);
    $des2 = mysqli_real_escape_string($conn, $_POST['desc2']);
    $des3 = mysqli_real_escape_string($conn, $_POST['desc3']);
    $des4 = mysqli_real_escape_string($conn, $_POST['desc4']);
    $des5 = mysqli_real_escape_string($conn, $_POST['desc5']);
    
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $writer = mysqli_real_escape_string($conn, $_POST['writer']);
    $main=mysqli_real_escape_string($conn, $_FILES["main"]["name"]);
    $img1=mysqli_real_escape_string($conn, $_FILES["img1"]["name"]);
    $img2=mysqli_real_escape_string($conn, $_FILES["img2"]["name"]);
    $img3=mysqli_real_escape_string($conn, $_FILES["img3"]["name"]);
    $img4=mysqli_real_escape_string($conn, $_FILES["img4"]["name"]);
    


    $maintype = strtolower(pathinfo($main,PATHINFO_EXTENSION));
    $imgtype1 = strtolower(pathinfo($img1,PATHINFO_EXTENSION));
    $imgtype2 = strtolower(pathinfo($img2,PATHINFO_EXTENSION));
    $imgtype3 = strtolower(pathinfo($img3,PATHINFO_EXTENSION));
    $imgtype4 = strtolower(pathinfo($img4,PATHINFO_EXTENSION));
   
    $sql = "SELECT * FROM blog_writer WHERE name='$writer'";
    var_dump($sql);
            $result = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result);
            $a=$row['id'];
    
        if($maintype != 'jpg' && $maintype != 'jpeg' &&  $maintype != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=maininvalid");
            exit();
        }

        else if($imgtype1 != 'jpg' && $imgtype1 != 'jpeg' &&  $imgtype1 != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=img1invalid");
            exit();
        }

        else if($imgtype2 != 'jpg' && $imgtype2 != 'jpeg' &&  $imgtype2 != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=img2invalid");
            exit();
        }

        else if($imgtype3 != 'jpg' && $imgtype3 != 'jpeg' &&  $imgtype3 != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=img3invalid");
            exit();
        }

        else if($imgtype4 != 'jpg' && $imgtype4 != 'jpeg' &&  $imgtype4 != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=img4invalid");
            exit();
        }


        
        else
        {

            // Get image name
            $mainfile = $_FILES['main']['name'];
            $maintarget = "../blog/".basename($mainfile);

            $imgfile1 = $_FILES['img1']['name'];
            $imgtarget1 = "../blog/".basename($imgfile1);

            $imgfile2 = $_FILES['img2']['name'];
            $imgtarget2 = "../blog/".basename($imgfile2);

            $imgfile3 = $_FILES['img3']['name'];
            $imgtarget3 = "../blog/".basename($imgfile3);

            $imgfile4 = $_FILES['img4']['name'];
            $imgtarget4 = "../blog/".basename($imgfile4);

            

$error=0;
            if(!move_uploaded_file($_FILES["img1"]["tmp_name"], $imgtarget1))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img2"]["tmp_name"], $imgtarget2))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img3"]["tmp_name"], $imgtarget3))
               { $error=1; }

               if(!move_uploaded_file($_FILES["img4"]["tmp_name"], $imgtarget4))
               { $error=1; }

              

            if($error==1)
            {
                header("Location: ../add_blog.php?error=sampleupload");
                    exit();
            }

            $date=date("Y-m-d");
            var_dump ($date);
            var_dump($maintarget);
            // Check if user doesn't already exist i.e. email is not in db
            
              // Insert the user in the db
                if (move_uploaded_file($_FILES["main"]["tmp_name"], $maintarget) )                
                {
                    $sql = "INSERT INTO `blog`(w_id,`title`, `des1`, `des2`, `des3`, `des4`, `des5`, `tags`, `main`, `img1`, `img2`, `img3`,  `img4`,`date`) VALUES ($a,'$title','$des1','$des2','$des3','$des4','$des5','$tags','$mainfile','$imgfile1','$imgfile2','$imgfile3','$imgfile4','$date')";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));

                    
                    // Now redirect the user
                    // $_SESSION['formFilled'] = FALSE;
                    // unset($_SESSION['firstname']);
                    // unset($_SESSION['lastname']);
                    // unset($_SESSION['email']);
                    // unset($_SESSION['contact']);
                    
// && move_uploaded_file($_FILES["img1"]["tmp_name"], $imgtarget1) && move_uploaded_file($_FILES["img2"]["tmp_name"], $imgtarget2) && move_uploaded_file($_FILES["img3"]["tmp_name"], $imgtarget3)
                    header("Location: ../add_blog.php?error=success");
                    exit();
                }
                else
                {
                    header("Location: ../add_blog.php?error=sampleupload");
                    exit();
                }
            
        }
    }
    else
    {
        header("Location: ../registerwriter.php");
        exit();
    }
