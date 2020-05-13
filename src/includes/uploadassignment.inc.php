<?php

session_start();
include_once 'connect.inc.php';
// error_reporting(0);

if (isset($_POST['submit1'])) {

    #Treat user input as text and not as code
    
    $ink = mysqli_real_escape_string($conn, $_POST['ink']);
    $deliverydate = mysqli_real_escape_string($conn, $_POST['deliverydate']);
    $assignment=mysqli_real_escape_string($conn, $_FILES['assignment']['name']);
    $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
    $date_errors = DateTime::getLastErrors();
    
    var_dump($ink);

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
        header("Location: ../upload.php?signup=empty");
        exit();
    } else if(!preg_match("/^[a-zA-Z]*$/", $ink)){
        // Check if input characters are Valid i.e if they only contain a-z and A-Z
        header("Location: ../upload.php?signup=invalid");
        exit();
    } else if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
        //Check if DOB is valid
        header("Location: ../upload.php?signup=deliverydate");
        exit();
    }
    else if($FileType != 'pdf')
    {
        //Check if file is valid
        var_dump($FileType);
        header("Location: ../upload.php?signup=fileinvalid");
        exit();
    }
    else if(!file_exists($_FILES['assignment']['tmp_name']) || !is_uploaded_file($_FILES['assignment']['tmp_name'])) {
            //Signature file problem
            header("Location: ../upload.php?signup=signupload");
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

            
            // echo $totalPages;
        

        // Check if user doesn't already exist i.e. email is not in db
        // $sql = "SELECT * FROM assignments WHERE email='$email';";
    
       
                    // Hashing the password
            
            // Insert the user in the db
            // $datetime = "SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET))";
            // date_default_timezone_set('Asia/Kolkata');
            // $datetime =  date('d-m-Y H:i:s');
            if (move_uploaded_file($_FILES['assignment']['tmp_name'], $signtarget)){
                $path = $signtarget;
            var_dump($path);
            $totalPages = countPages($path);
            var_dump($totalPages);
            $amount = $totalPages*6;
            
                $sql = "INSERT INTO `assignments` (`user_id`, `assign_name`, `ink_color`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`) 
                        VALUES ('$u_id', '$ass','$ink', now() ,'$deliverydate', '$amount', '0', '0', '0', '0')";
                        // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                       
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $_SESSION['formFilled'] = false;
                unset($_SESSION['ink']);
                unset($_SESSION['deliverydate']);
                // Now redirect the user
                header("Location: ../upload.php?signup=success");
                exit();
            // }else if(move_uploaded_file($_FILES['assignment']['tmp_name'], $ass)){
            //     header("Location: ../add_event.php?signup=profileupload");
            }else{
                header("Location: ../upload.php?signup=uploadissue");
                exit();
            }
        }
    }
if (isset($_POST['submit2'])) {

        #Treat user input as text and not as code
        
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $deliverydate = mysqli_real_escape_string($conn, $_POST['deliverydate1']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);

        $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
        $date_errors = DateTime::getLastErrors();
        
    
        // Set up session variables so if error occurs user doesn't have to fill entire form
        $_SESSION['formFilled1'] = true;
        $_SESSION['title'] = $title;
       $_SESSION['message'] = $message;
        $_SESSION['deliverydate1'] = $deliverydate;
    
    
        
    
        $mail = $_SESSION['email'];
        // echo $mail;
        $u_id = $_SESSION['id'];
        // echo $u_id;
    
    
    
    
        // Form Validation / Error Handlers
        // Check for empty fields
        if(empty($title) || empty($deliverydate) || empty($message)) {
            header("Location: ../upload.php?signup=empty");
            exit();
        } else if(!preg_match("/^[a-zA-Z]*$/", $title)){
            // Check if input characters are Valid i.e if they only contain a-z and A-Z
            header("Location: ../upload.php?signup=invalid");
            exit();
        } else if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
            //Check if DOB is valid
            header("Location: ../upload.php?signup=deliverydate");
            exit();
        } else {
    
            
                // var_dump($ass);
    
                
                // echo $totalPages;
            
    
            // Check if user doesn't already exist i.e. email is not in db
            // $sql = "SELECT * FROM assignments WHERE email='$email';";
        
           
                        // Hashing the password
                
                // Insert the user in the db
                // $datetime = "SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET))";
                // date_default_timezone_set('Asia/Kolkata');
                // $datetime =  date('d-m-Y H:i:s');
                
                
                    $sql = "INSERT INTO `contentwriting`(`user_id`, `content_title`, `content_desc`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`) 
                                VALUES ('$u_id', '$title','$message', now() ,'$deliverydate', '0', '0', '0', '0', '0')";
                            // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                           
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    // Now redirect the user
                    $_SESSION['formFilled1'] = false;
                    unset($_SESSION['title']);
                    unset($_SESSION['deliverydate1']);
                    header("Location: ../upload.php?signup=success");
                    exit();
                // }else if(move_uploaded_file($_FILES['assignment']['tmp_name'], $ass)){
                //     header("Location: ../add_event.php?signup=profileupload");
                }
            
        }
 else {
  // If someone just loads the url without submitting data
  header("Location: ../login.php");
  exit();
}