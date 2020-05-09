<?php
session_start();
include_once 'connect.inc.php';

if (isset($_POST['submit'])) {

    #Treat user input as text and not as code
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $college = mysqli_real_escape_string($conn, $_POST['college']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $repass = mysqli_real_escape_string($conn, $_POST['repass']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    
    

    // Set up session variables so if error occurs user doesn't have to fill entire form
    $_SESSION['formFilled'] = true;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['college'] = $college;
    $_SESSION['email'] = $email;
    $_SESSION['contact'] = $contact;
  
    // Form Validation / Error Handlers
    // Check for empty fields
    if(empty($firstname) || empty($lastname)  || empty($college) || empty($email) || empty($pass) || empty($repass) || empty($address)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    // } else if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)|| !preg_match("/^[a-zA-Z]*$/", $class)){
    //     // Check if input characters are Valid i.e if they only contain a-z and A-Z
    //     header("Location: ../signup.php?signup=invalid");
    //     exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if email is Valid
        header("Location: ../signup.php?signup=email");
        exit();
    } else if(strlen($pass) < 8){
        //Check if password is valid
        header("Location: ../signup.php?signup=len");
        exit();
    } else if($contact <=10000000 || $contact >= 99999999999) {
        //Check if phone is valid
        header("Location: ../signup.php?signup=contact");
        exit();
    } else if(strlen($address) > 500) {
        //Check if address is valid
        header("Location: ../signup.php?signup=address");
        exit();
    } else {


        // Check if user doesn't already exist i.e. email is not in db
        $sql = "SELECT * FROM users WHERE email='$email';";

        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0) {
            unset($_SESSION['email']);
            header("Location: ../signup.php?signup=taken");
            exit();
        } else if(strcmp($pass,$repass) !== 0) {
            //Check if both passwords match
            header("Location: ../signup.php?signup=pass");
            exit();
        } else {
            // Hashing the password
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
            // Insert the user in the db
            
                $sql = "INSERT INTO users (firstname, lastname, college, email, password, mobile, address) 
                        VALUES ('$firstname', '$lastname', '$college', '$email', '$hashedPass', '$contact', '$address');";
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                // Now redirect the user
                $_SESSION['formFilled'] = FALSE;
                unset($_SESSION['firstname']);
                unset($_SESSION['lastname']);
                unset($_SESSION['college']);
                unset($_SESSION['email']);
                unset($_SESSION['contact']);
                header("Location: ../signup.php?signup=success");
                exit();
        }
    }
} else {
  // If someone just loads the url without submitting data
//   header("Location: ../signup.php");
//   exit();
}