<?php
//Now this page can have sessions
session_start();
include_once 'connect.inc.php';

if(isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  //Error Handlers
  // Check if inputs are empty
  if(empty($email) || empty($pass)) {
    header("Location: ../login.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1) {
      header("Location: ../login.php?login=error");
      exit();
    }
    else {
      if($row = mysqli_fetch_assoc($result)) {
        // Dehashing the password
        $hashedPassCheck = password_verify($pass, $row['password']);
        if($hashedPassCheck == false) {
          header("Location: ../login.php?login=error");
          exit();
        }else {
            // Login the user here use a common variable called $_SESSION
          $_SESSION['id'] = $row['id'];
          $_SESSION['first'] = $row['firstname'];
          $_SESSION['last'] = $row['lastname'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['mobile'] = $row['mobile'];
          $_SESSION['address'] = $row['address'];
          
          if(strcmp($email, "admin@bluepen.com") == 0) {
            $_SESSION['privilege'] = "admin";
          }
          else if(strcmp($email, "eve@ieee.com") == 0) {
            $_SESSION['privilege'] = "eve";
          }
          else {
            $_SESSION['privilege'] = "member";
          }
          header("Location: ../index.php");
          exit();
          }
        }
      }
    }
  }
  else {
  header("Location: ../login.php");
  exit();
}