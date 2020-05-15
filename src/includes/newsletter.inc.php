<?php
include_once 'connect.inc.php';

if (isset($_POST['submit']))
{

    #Treat user input as text and not as code
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $sql = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header("Location: ../index.php?error=seccess");
    exit();
}
else{
    header("Location: ../index.php?error=error");
    exit();
}






