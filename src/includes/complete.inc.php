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
        $u =  mysqli_real_escape_string($conn, $_GET['u']);
        // $assign_id=$_SESSION['assign_id'];
        if($u=='h')
        $sql = "UPDATE `assignments` SET `soa_completed` = 1 WHERE `assign_id` =".$assign_id."";
        elseif ($u=='c')
        $sql = "UPDATE `contentwriting` SET `soa_completed` = 1 WHERE `content_id` =".$assign_id."";
        elseif ($u=='t')
        $sql = "UPDATE `typing` SET `soa_completed` = 1 WHERE `type_id` =".$assign_id."";
        var_dump($sql);
        mysqli_query($conn, $sql) or die("We're Facing some issues");
        if($u=='h'){
          header("Location: ../viewjobs.php?aid=".$assign_id);
          exit();}
          elseif ($u=='c'){
          header("Location: ../viewcontentwriting.php?id=".$assign_id);
          exit();}
          elseif ($u=='t'){
            header("Location: ../viewtyping.php?id=".$assign_id);
            exit();}
?>
