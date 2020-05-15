<?php

session_start();
include_once 'connect.inc.php';


if (isset($_POST['submit']))
{

    #Treat user input as text and not as code
   
    $des = mysqli_real_escape_string($conn, $_POST['desc']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    
    $imgw=mysqli_real_escape_string($conn, $_FILES["imgw"]["name"]);


    
    $imgtypew = strtolower(pathinfo($imgw,PATHINFO_EXTENSION));
    
        if($imgtypew != 'jpg' && $imgtypew != 'jpeg' &&  $imgtypew != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../add_blog.php?error=imgwinvalid");
            exit();
        }
        // else if(!file_exists($_FILES['sample']['tmp_name']) || !is_uploaded_file($_FILES['sample']['tmp_name']))
        // {
        //     //sample file problem
        //     header("Location: ../registerwriter.php?signup=sample_upload");
        //     exit();
        // }
        else
        {

            // Get image name
            

            $imgfilew = $_FILES['imgw']['name'];
            $imgtargetw = "../blogwriter/".basename($imgfilew);


            // Check if user doesn't already exist i.e. email is not in db
            
              // Insert the user in the db
                if (move_uploaded_file($_FILES["imgw"]["tmp_name"], $imgtargetw) )                
                {
                    $sql = "INSERT INTO `blog_writer`(`name`, `des`, `link`,`img`) VALUES ('$name','$des','$link','$imgfilew')";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    // Now redirect the user
                    // $_SESSION['formFilled'] = FALSE;
                    // unset($_SESSION['firstname']);
                    // unset($_SESSION['lastname']);
                    // unset($_SESSION['email']);
                    // unset($_SESSION['contact']);
                    
// && move_uploaded_file($_FILES["img1"]["tmp_name"], $imgtarget1) && move_uploaded_file($_FILES["img2"]["tmp_name"], $imgtarget2) && move_uploaded_file($_FILES["img3"]["tmp_name"], $imgtarget3)
                    header("Location: ../add_blogwriter.php?error=success");
                    exit();
                }
                else
                {
                    // header("Location: ../add_blog.php?error=sampleupload");
                    // exit();
                }
            
        }
    // }
    // else
    // {
    //     header("Location: ../registerwriter.php?signup=invalidfile");
    //     exit();
    // }
}
else 
{
  // If someone just loads the url without submitting data
  header("Location: ../add_blogwriter.php");
  exit();
}