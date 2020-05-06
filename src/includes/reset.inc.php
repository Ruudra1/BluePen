<?php 
session_start();
include_once 'connect.inc.php';
date_default_timezone_set('Asia/Kolkata');
$today = date("n/j/Y,g:i a");
$et= date("n/j/Y,g:i a",strtotime('+15 minutes',strtotime($today)));
$et1=strtotime($et);
$id = $_GET['id'];
// var_dump($id);

if(isset($_POST['submit'])) {
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['repass']);
    if(strlen($pass) < 8 || strlen($cpass) < 8){
        $link = "../forget_password1.php?et=".$et1."&item=".urlencode(base64_encode($id));
        $_SESSION['state']='len';
        header("Location: $link"); 
        exit();
    }else{
        if($pass == $cpass)
        {
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password='$hashedPass' WHERE id=".$id;
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                // Now redirect the user
                header("Location: ../login.php?forget=success");
                exit();
        }else{
            $_SESSION['state']='mismatch';
            $link = "../forget_password1.php?et=".$et1."&item=".urlencode(base64_encode($id));
            header("Location: $link");
            exit();
        }
    }
}