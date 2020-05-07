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
        // $assign_id =  mysqli_real_escape_string($conn, $_GET['assign_id']);
        $assign_id =  mysqli_real_escape_string($conn, $_GET['id']);
        // $assign_id=$_SESSION['assign_id'];
        $sql = "UPDATE `assignments` SET `soa_written` = 1 WHERE `assign_id` =".$assign_id."";
        var_dump($sql);
        mysqli_query($conn, $sql) or die("We're Facing some issues");
        header("Location: ../viewjobs.php?aid=".$assign_id);
        exit();
?>
