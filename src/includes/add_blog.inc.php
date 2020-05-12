<?php

session_start();
include_once 'connect.inc.php';

if (isset($_POST['submit']))
{

    #Treat user input as text and not as code
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $des = mysqli_real_escape_string($conn, $_POST['desc']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $abt = mysqli_real_escape_string($conn, $_POST['about']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
   
    $main=mysqli_real_escape_string($conn, $_FILES["main"]["name"]);
    $img1=mysqli_real_escape_string($conn, $_FILES["img1"]["name"]);
    $img2=mysqli_real_escape_string($conn, $_FILES["img2"]["name"]);
    $img3=mysqli_real_escape_string($conn, $_FILES["img3"]["name"]);
    $imgw=mysqli_real_escape_string($conn, $_FILES["imgw"]["name"]);


    $maintype = strtolower(pathinfo($main,PATHINFO_EXTENSION));
    $imgtype1 = strtolower(pathinfo($img1,PATHINFO_EXTENSION));
    $imgtype2 = strtolower(pathinfo($img2,PATHINFO_EXTENSION));
    $imgtype3 = strtolower(pathinfo($img3,PATHINFO_EXTENSION));
    $imgtypew = strtolower(pathinfo($imgw,PATHINFO_EXTENSION));
    
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


        else if($imgtypew != 'jpg' && $imgtypew != 'jpeg' &&  $imgtypew != 'png' )
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
            $mainfile = $_FILES['main']['name'];
            $maintarget = "../blog/".basename($mainfile);

            $imgfile1 = $_FILES['img1']['name'];
            $imgtarget1 = "../blog/".basename($imgfile1);

            $imgfile2 = $_FILES['img2']['name'];
            $imgtarget2 = "../blog/".basename($imgfile2);

            $imgfile3 = $_FILES['img3']['name'];
            $imgtarget3 = "../blog/".basename($imgfile3);

            $imgfilew = $_FILES['imgw']['name'];
            $imgtargetw = "../blog/".basename($imgfilew);

$error=0;
            if(!move_uploaded_file($_FILES["img1"]["tmp_name"], $imgtarget1))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img2"]["tmp_name"], $imgtarget2))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img3"]["tmp_name"], $imgtarget3))
               { $error=1; }

               if(!move_uploaded_file($_FILES["imgw"]["tmp_name"], $imgtargetw))
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
                    $sql = "INSERT INTO `blog`(`title`, `des`, `tags`, `name`, `des_writer`, `link`, `main`, `img1`, `img2`, `img3`, `date`,`imgw`) VALUES ('$title','$des','$tags','$name','$abt','$link','$mainfile','$imgfile1','$imgfile2','$imgfile3','$date','$imgfilew')";
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
  header("Location: ../add_blog.php");
  exit();
}