<?php

session_start();
include_once 'connect.inc.php';
// error_reporting(0);

if (isset($_POST['submit'])) {

    #Treat user input as text and not as code
    
    $ink = mysqli_real_escape_string($conn, $_POST['ink']);
    $deliverydate = mysqli_real_escape_string($conn, $_POST['deliverydate']);
    $assignment=mysqli_real_escape_string($conn, $_FILES['assignment']['name']);
    $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
    $date_errors = DateTime::getLastErrors();
    
    

    // Set up session variables so if error occurs user doesn't have to fill entire form
    $_SESSION['formFilled'] = true;
    
    $_SESSION['ink'] = $ink;
    $_SESSION['deliverydate'] = $deliverydate;


    $FileType = strtolower(pathinfo($assignment,PATHINFO_EXTENSION));

    $mail = $_SESSION['email'];
    // echo $mail;
    $u_id = $_SESSION['id'];
    // echo $u_id;




    // Form Validation / Error Handlers
    // Check for empty fields
    if(empty($ink) || empty($deliverydate)) {
        header("Location: ../uploadassignment.php?signup=empty");
        exit();
    } else if(!preg_match("/^[a-zA-Z]*$/", $ink)){
        // Check if input characters are Valid i.e if they only contain a-z and A-Z
        header("Location: ../uploadassignment.php?signup=invalid");
        exit();
    } else if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
        //Check if DOB is valid
        header("Location: ../uploadassignment.php?signup=deliverydate");
        exit();
    }
    else if($FileType != 'pdf')
    {
        //Check if file is valid
        // var_dump($FileType);
        header("Location: ../uploadassignment.php?signup=fileinvalid");
        exit();
    }
    else if(!file_exists($_FILES['assignment']['tmp_name']) || !is_uploaded_file($_FILES['assignment']['tmp_name'])) {
            //Signature file problem
            header("Location: ../uploadassignment.php?signup=signupload");
            exit();
    } else {

        // Get image name
            $assignment = $_FILES['assignment']['name'];
            $ass = $mail.$assignment;
        // image file directory
            $signtarget = "../assignments/".basename($ass);

            function countPages($path)
            {
            $pdftext = file_get_contents($path);
            $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
            return $num;
            }
            // var_dump($ass);

            $path = $signtarget;
            var_dump($path);
            $totalPages = countPages($path);
            var_dump($totalPages);
            $amount = $totalPages*6;
            var_dump($amount);
            // echo $totalPages;
        

        // Check if user doesn't already exist i.e. email is not in db
        // $sql = "SELECT * FROM assignments WHERE email='$email';";
    
       
                    // Hashing the password
            
            // Insert the user in the db
            // $datetime = "SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET))";
            // date_default_timezone_set('Asia/Kolkata');
            // $datetime =  date('d-m-Y H:i:s');
            if (move_uploaded_file($_FILES['assignment']['tmp_name'], $signtarget)){
                $sql = "INSERT INTO assignments (user_id, assign_name, ink_color, submission_datetime, delivery_date, amount, soa_assigned, soa_written, soa_paid, soa_completed) 
                        VALUES ('$u_id', '$ass','$ink', now() ,'$deliverydate', '$amount', '0', '0', '0', '0');";
                        // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                // Now redirect the user
                // header("Location: ../uploadassignment.php?signup=success");
                // exit();
            // }else if(move_uploaded_file($_FILES['assignment']['tmp_name'], $ass)){
            //     header("Location: ../add_event.php?signup=profileupload");
            }else{
                header("Location: ../index?signup=uploadissue");
                exit();
            }
        }
    }
 else {
  // If someone just loads the url without submitting data
  header("Location: ../login.php");
  exit();
}