<?php

session_start();
include_once 'connect.inc.php';

if (isset($_POST['submit']))
{

    #Treat user input as text and not as code
    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $sample=mysqli_real_escape_string($conn, $_FILES["sample"]["name"]);
    

    // Set up session variables so if error occurs user doesn't have to fill entire form
    $_SESSION['formFilled'] = true;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['contact'] = $contact;

    $FileType = strtolower(pathinfo($sample,PATHINFO_EXTENSION));
    var_dump($FileType);
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
    
        if(empty($firstname) || empty($lastname) || empty($email) || empty($address))
        {
            header("Location: ../registerwriter.php?signup=empty");
            exit();
        }
        // else if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname))
        // {
        //     // Check if input characters are Valid i.e if they only contain a-z and A-Z
        //     header("Location: ../registerwriter.php?signup=invalid");
        //     exit();
        // }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Check if email is Valid
            header("Location: ../registerwriter.php?signup=email");
            exit();
        }
        else if($contact <=10000000 || $contact >= 99999999999)
        {
            //Check if phone is valid
            header("Location: ../registerwriter.php?signup=contact");
            exit();
        }
        else if(strlen($address) > 500)
        {
            //Check if address is valid
            header("Location: ../registerwriter.php?signup=address");
            exit();
        }
        else if($FileType != 'pdf' && $FileType != 'jpg' && $FileType != 'jpeg' &&  $FileType != 'png' )
        {
            //Check if file is valid
            // var_dump($FileType);
            header("Location: ../registerwriter.php?signup=fileinvalid");
            exit();
        }
        else if(!file_exists($_FILES['sample']['tmp_name']) || !is_uploaded_file($_FILES['sample']['tmp_name']))
        {
            //sample file problem
            header("Location: ../registerwriter.php?signup=sample_upload");
            exit();
        }
        else
        {

            // Get image name
            $samplefile = $_FILES['sample']['name'];
            $filename = $email.$samplefile;
            // image file directory
            $sampletarget = "../writingsample/".basename($filename);
            // var_dump($sampletarget);
            // Check if user doesn't already exist i.e. email is not in db
            $sql = "SELECT * FROM writer WHERE email='$email';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                header("Location: ../registerwriter.php?signup=taken");
                exit();
            }
            else
            {
                // Insert the user in the db
                if (move_uploaded_file($_FILES["sample"]["tmp_name"], $sampletarget))
                {
                    $sql = "INSERT INTO writer (firstname, lastname, email, mobile, address, file) VALUES ('$firstname', '$lastname', '$email', '$contact', '$address', '$filename');";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    // Now redirect the user
                    $_SESSION['formFilled'] = FALSE;
                    unset($_SESSION['firstname']);
                    unset($_SESSION['lastname']);
                    unset($_SESSION['email']);
                    unset($_SESSION['contact']);
                    

                    header("Location: ../registerwriter.php?signup=success");
                    exit();
                }
                else
                {
                    header("Location: ../index.php?signup=sampleupload");
                    exit();
                }
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
  header("Location: ../registerwriter.php");
  exit();
}