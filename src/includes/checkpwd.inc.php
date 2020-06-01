<?php

session_start();
include_once 'connect.inc.php';

if (isset($_POST['submit'])) {

    #Treat user input as text and not as code
    
    $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
    
    // Set up session variables so if error occurs user doesn't have to fill entire form
    // $email = $_SESSION['email'];
    // $sql = "SELECT * FROM users WHERE email='$email';";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // $row = mysqli_fetch_assoc($result);
    // $hashedPassCheck = password_verify($oldpass, $row['password']);
    // var_dump($oldpass);
    // $pwd = $_SESSION['password'];
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    // var_dump($resultCheck);
    $row = mysqli_fetch_assoc($result);
    $hashedPassCheck = password_verify($oldpass, $row['password']);
    
    // Form Validation / Error Handlers
    // Check for empty fields
    if(empty($oldpass)){ // put empty variables test condition here
        header("Location: ../changepassword.php?changepassword=empty");
        exit();
        // $hashedPassCheck == false
    }else if($hashedPassCheck == false){
        //Check if old password is same as entered password
        echo 'pwd check failed';
        header("Location: ../changepassword.php?changepassword=wrongpassword");
        exit();
    }else{

        
                // Now redirect the user
                echo 'password checked succesfully';
                exit();
        }
    }
else {
  // If someone just loads the url without submitting data
  header("Location: ../changepassword.php");
  exit();
}