<?php
    session_start();

    if(isset($_SESSION['privilege'])) {
      if(strcmp($_SESSION['privilege'], "admin") !== 0) {
          // User is not an admin
          header("Location: index.php");
          exit();
      }
    } else {
      //User is not signed in
      header("Location: index.php");
      exit();
		}
        include_once 'connect.inc.php';
        $id =  mysqli_real_escape_string($conn, $_GET['id']);
        $event_id= mysqli_real_escape_string($conn, $_GET['event_id']);
        $sql = "UPDATE `registration` SET `attended` = 1 WHERE `regno` =".$id." && `event_id` = ".$event_id."";
        mysqli_query($conn, $sql) or die("We're Facing some issues");
        header("Location: ../viewstudent.php?id=".$event_id );
        exit();
?>