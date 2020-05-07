<?php

session_start();
include_once 'connect.inc.php';

if (isset($_POST['submit'])) {

    #Treat user input as text and not as code
    
    $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
    $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
    
    // Set up session variables so if error occurs user doesn't have to fill entire form
    // $mail = $_SESSION['email'];
    // $sql = "SELECT * FROM users WHERE email='$email';";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // $row = mysqli_fetch_assoc($result);
    // $hashedPassCheck = password_verify($oldpass, $row['password']);
    
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $hashedPassCheck = password_verify($oldpass, $row['password']);

    // Form Validation / Error Handlers
    // Check for empty fields
    if(empty($oldpass) || empty($newpass) || empty($cpass)) { // put empty variables test condition here
        header("Location: ../changepassword.php?changepassword=empty");
        exit();
        // $hashedPassCheck == false
    }else if($hashedPassCheck == false){
        //Check if old password is same as entered password
        header("Location: ../changepassword.php?changepassword=wrongpassword");
        exit();
        
    }else if((strlen($newpass) && strlen($cpass)) < 8){
        //Check if password is valid
        header("Location: ../changepassword.php?changepassword=len");
        exit();
    }else {


        // Check if user doesn't already exist i.e. email is not in db
        // $sql = "SELECT * FROM users WHERE email='$email';";

        
        // $result = mysqli_query($conn, $sql);
        // $resultCheck = mysqli_num_rows($result);
        if(strcmp($pass,$repass) !== 0) {
            //Check if both passwords match
            header("Location: ../changepassword.php?changepassword=pass");
            exit();
        } else {
            // Hashing the password
            $hashedPass = password_hash($cpass, PASSWORD_DEFAULT);
            // Insert the user in the db
            
                $sql = "UPDATE users SET password='$hashedPass' WHERE email = '$email'";
                // $sql = "INSERT INTO users (password) VALUES ('$hashedPass');";
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                // Now redirect the user
                header("Location: ../changepassword.php?changepassword=success");
                exit();
        }
    }
}
else {
  // If someone just loads the url without submitting data
  header("Location: ../changepassword.php");
  exit();
}