<?php

session_start();
include_once 'connect.inc.php';
// error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$today = date("n/j/Y");
    $et= date("n/j/Y",strtotime('+24 hour',strtotime($today)));
    $et1=strtotime($et);
    $eta= date("n/j/Y",strtotime('+48 hour',strtotime($today)));
    $eta1= strtotime($eta);
    $etb= date("n/j/Y",strtotime('+72 hour',strtotime($today)));
    $etb1= strtotime($etb);

if (isset($_POST['submit1'])) {

    #Treat user input as text and not as code
    
    $ink = mysqli_real_escape_string($conn, $_POST['ink']);
    $deliverydate = mysqli_real_escape_string($conn, $_POST['deliverydate']);
    $assignment=mysqli_real_escape_string($conn, $_FILES['assignment']['name']);
    $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
    $date_errors = DateTime::getLastErrors();
    $dateofdelivery= strtotime($deliverydate);
    // var_dump($ink);

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
        // var_dump($FileType);
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
            // var_dump($path);
            $totalPages = countPages($path);
            // var_dump($totalPages);
            if($dateofdelivery==$et1 )
            $amount = $totalPages*8;
            if($dateofdelivery==$eta1)
            $amount = $totalPages*7;
            if($dateofdelivery>=$etb1)
            $amount = $totalPages*6;
            
                $sql = "INSERT INTO `assignments` (`user_id`, `assign_name`, `ink_color`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`) 
                        VALUES ('$u_id', '$ass','$ink', now() ,'$deliverydate', '$amount', '0', '0', '0', '0')";
                        // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                       
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $_SESSION['formFilled'] = false;
                unset($_SESSION['ink']);
                unset($_SESSION['deliverydate']);
                // Now redirect the user
                header("Location: ../upload.php?signup=asuccess");
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
        $words = mysqli_real_escape_string($conn, $_POST['words']);

        $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
        $date_errors = DateTime::getLastErrors();
        
    // var_dump($message);
        // Set up session variables so if error occurs user doesn't have to fill entire form
        $_SESSION['formFilled1'] = true;
        $_SESSION['title'] = $title;
       $_SESSION['message'] = $message;
        $_SESSION['deliverydate1'] = $deliverydate;
        $_SESSION['words'] = $words;
    
    
        if($_SESSION['words']=='400 words')
        $amt='300';
        if($_SESSION['words']=='400-600 words')
        $amt='400';
        if($_SESSION['words']=='600-800 words')
        $amt='500';
        if($_SESSION['words']=='800-1200 words')
        $amt='650';
    
        $mail = $_SESSION['email'];
        // echo $mail;
        $u_id = $_SESSION['id'];
        // echo $u_id;
    
    
    
    
        // Form Validation / Error Handlers
        // Check for empty fields
        if(empty($title) || empty($deliverydate) || empty($message) || empty($words)) {
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
                
                
                    $sql = "INSERT INTO `contentwriting`(`user_id`, `content_title`, `word_count`, `content_desc`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`) 
                                VALUES ('$u_id', '$title','$words','$message', now() ,'$deliverydate', $amt, '0', '0', '0', '0')";
                            // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                           
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    // Now redirect the user
                    $_SESSION['formFilled1'] = false;
                    unset($_SESSION['title']);
                    unset($_SESSION['words']);
                    unset($_SESSION['deliverydate1']);
                    header("Location: ../upload.php?signup=success");
                    exit();
                // }else if(move_uploaded_file($_FILES['assignment']['tmp_name'], $ass)){
                //     header("Location: ../add_event.php?signup=profileupload");
                }
            
        }
if (isset($_POST['submit3'])) {

            #Treat user input as text and not as code
            $title = mysqli_real_escape_string($conn, $_POST['title1']);
            $message = mysqli_real_escape_string($conn, $_POST['message1']);
            $orientation = mysqli_real_escape_string($conn, $_POST['orientation']);
            $font = mysqli_real_escape_string($conn, $_POST['font']);
            $fontsize = mysqli_real_escape_string($conn, $_POST['fontsize']);
            $fontcolor = mysqli_real_escape_string($conn, $_POST['fontcolor']);
            $pagesize = mysqli_real_escape_string($conn, $_POST['pagesize']);
            $margins = mysqli_real_escape_string($conn, $_POST['margins']);
            $deliverydate = mysqli_real_escape_string($conn, $_POST['deliverydate2']);
            $dateofdelivery= strtotime($deliverydate);
            $assignment=mysqli_real_escape_string($conn, $_FILES['assignment1']['name']);
            
    
            $date = DateTime::createFromFormat('Y-m-d', $deliverydate);
            $date_errors = DateTime::getLastErrors();
            
        // var_dump($message);
            // Set up session variables so if error occurs user doesn't have to fill entire form
            $_SESSION['formFilled2'] = true;
            $_SESSION['title1'] = $title;
            // $_SESSION['message1'] = $message;
            $_SESSION['orientation'] = $orientation;
            $_SESSION['font'] = $font;
            $_SESSION['fontsize'] = $fontsize;
            $_SESSION['fontcolor'] = $fontcolor;
            $_SESSION['pagesize'] = $pagesize;
            $_SESSION['margins'] = $margins;
         
            $_SESSION['deliverydate2'] = $deliverydate;
        
        
            $mail = $_SESSION['email'];
            // echo $mail;
            $u_id = $_SESSION['id'];
            // echo $u_id;
        
        
        
        
            // Form Validation / Error Handlers
            // Check for empty fields
            if(empty($title) || empty($deliverydate) || empty($orientation) || empty($font) || empty($fontsize) || empty($fontcolor) || empty($pagesize) || empty($margins)) {
                header("Location: ../upload.php?signup=empty");
                exit();
            } else if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
                //Check if DOB is valid
                header("Location: ../upload.php?signup=deliverydate");
                exit();
            } else if(!file_exists($_FILES['assignment1']['tmp_name']) || !is_uploaded_file($_FILES['assignment1']['tmp_name'])) {
                //Signature file problem
                header("Location: ../upload.php?signup=signupload");
                exit();
            } else {
    
            // Get image name
                $assignment = $_FILES['assignment1']['name'];
                $ass = $mail.$assignment;
            // image file directory
                $signtarget = "../typing/".basename($ass);
    
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
                if (move_uploaded_file($_FILES['assignment1']['tmp_name'], $signtarget)){
                    $path = $signtarget;
                // var_dump($path);
                $totalPages = countPages($path);
                // var_dump($totalPages);
                if($dateofdelivery==$et1 )
            $amount = $totalPages*12;
            if($dateofdelivery==$eta1)
            $amount = $totalPages*11;
            if($dateofdelivery>=$etb1)
            $amount = $totalPages*10;
                
                
                    $sql = "INSERT INTO `typing`(`user_id`, `file_name`, `title`, `orientation`, `font`, `fontsize`, `fontcolor`, `pagesize`, `margins`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`)
                                         VALUES ('$u_id' , '$ass' , '$title' , '$orientation' , '$font' , '$fontsize' , '$fontcolor' , '$pagesize' , '$margins' , now() , '$deliverydate' , '$amount' , '0' , '0' , '0' , '0' )";
                            // SELECT SWITCHOFFSET(CAST(GETDATE() AS DATETIMEOFFSET), '+05:30')
                           
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    
                    
                    $_SESSION['formFilled2'] = false;
                    unset($_SESSION['title1']);
                    unset($_SESSION['message1']);
                    unset($_SESSION['orientation']);
                    unset($_SESSION['font']);
                    unset($_SESSION['fontsize']);
                    unset($_SESSION['fontcolor']);
                    unset($_SESSION['pagesize']);
                    unset($_SESSION['margins']);
                    unset($_SESSION['deliverydate2']);

                    // Now redirect the user
                    header("Location: ../upload.php?signup=tsuccess");
                    exit();
                // }else if(move_uploaded_file($_FILES['assignment']['tmp_name'], $ass)){
                //     header("Location: ../add_event.php?signup=profileupload");
                }else{
                    header("Location: ../upload.php?signup=uploadissue");
                    exit();
                }
            }
        }
 else {
  // If someone just loads the url without submitting data
  header("Location: ../login.php");
  exit();
}