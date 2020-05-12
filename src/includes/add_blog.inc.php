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


    // Set up session variables so if error occurs user doesn't have to fill entire form
    // $_SESSION['formFilled'] = true;
    // $_SESSION['firstname'] = $firstname;
    // $_SESSION['lastname'] = $lastname;
    // $_SESSION['email'] = $email;
    // $_SESSION['contact'] = $contact;

    $maintype = strtolower(pathinfo($main,PATHINFO_EXTENSION));
    $imgtype1 = strtolower(pathinfo($img1,PATHINFO_EXTENSION));
    $imgtype2 = strtolower(pathinfo($img2,PATHINFO_EXTENSION));
    $imgtype3 = strtolower(pathinfo($img3,PATHINFO_EXTENSION));
    // $allowedExts = array("pdf");
    // var_dump($allowedExts);
    // $temp = explode(".", $_FILES["sample"]["name"]);
    // var_dump($temp);
    // $extension = end($temp);
    // var_dump($extension);
// $upload_pdf=$_FILES["pdf_file"]["name"];
// move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/pdf/" . $_FILES["pdf_file"]["name"]);
// $sql=mysqli_query($con,"INSERT INTO `Table Name`(`pdf_file`)VALUES($upload_pdf')");
// if($sql){
// 	echo "Data Submit Successful";
// }
// else{
// 	echo "Data Submit Error!!";
// }


    // Form Validation / Error Handlers
    // Check for empty fields
    // if(strcmp($allowedExts, $extension))
    // {
    
        // if(empty($firstname) || empty($lastname) || empty($email) || empty($address))
        // {
        //     header("Location: ../registerwriter.php?signup=empty");
        //     exit();
        // }
        // else if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname))
        // {
        //     // Check if input characters are Valid i.e if they only contain a-z and A-Z
        //     header("Location: ../registerwriter.php?signup=invalid");
        //     exit();
        // }
        // else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        // {
        //     // Check if email is Valid
        //     header("Location: ../registerwriter.php?signup=email");
        //     exit();
        // }
        // else if($contact <=10000000 || $contact >= 99999999999)
        // {
        //     //Check if phone is valid
        //     header("Location: ../registerwriter.php?signup=contact");
        //     exit();
        // }
        // else if(strlen($address) > 500)
        // {
        //     //Check if address is valid
        //     header("Location: ../registerwriter.php?signup=address");
        //     exit();
        // }
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
$error=0;
            if(!move_uploaded_file($_FILES["img1"]["tmp_name"], $imgtarget1))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img2"]["tmp_name"], $imgtarget2))
               { $error=1; }
            if(!move_uploaded_file($_FILES["img3"]["tmp_name"], $imgtarget3))
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
                    $sql = "INSERT INTO `blog`(`title`, `des`, `tags`, `name`, `des_writer`, `link`, `main`, `img1`, `img2`, `img3`, `date`) VALUES ('$title','$des','$tags','$name','$abt','$link','$mainfile','$imgfile1','$imgfile2','$imgfile3','$date')";
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