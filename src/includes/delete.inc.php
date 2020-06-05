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
        $id =  mysqli_real_escape_string($conn, $_GET['id']);
        $u =  mysqli_real_escape_string($conn, $_GET['u']);
        if($u=='h')
        $sql = "select * from assignments where assign_id=".$id;
        elseif ($u=='c')
        $sql = "select * from contentwriting where content_id=".$id;
        elseif ($u=='t')
        $sql = "select * from typing where type_id=".$id;
        elseif ($u=='w')
        $sql = "select * from writer where id=".$id;
        elseif ($u=='cw')
        $sql = "select * from contentwriter where id=".$id;

        $result= mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $check= mysqli_num_rows($result);
        echo $check;
        // var_dump($sql);
        if($check==1)
        {
          if($u=='h'){
            $sql1 ='INSERT INTO `dump_jobs`(`user_id`, `submission_date`, `delivery_date`, `amount`, `category`) VALUES ("'.$row["user_id"].'" ,"'.$row["submission_datetime"].'" ,"'.$row["delivery_date"].'" ,"'.$row["amount"].'","assignments")';
            $sql2 = 'DELETE FROM `assignments` WHERE assign_id='.$id;
            $src='../viewjobs.php?stat=done&assign_id='.$id;
          }
          elseif ($u=='c'){
            $sql1 ='INSERT INTO `dump_jobs`(`user_id`, `submission_date`, `delivery_date`, `amount`, `category`) VALUES ("'.$row["user_id"].'" ,"'.$row["submission_datetime"].'" ,"'.$row["delivery_date"].'" ,"'.$row["amount"].'","contentwriting")';
            $sql2 = 'DELETE FROM `contentwriting` WHERE content_id='.$id;
            $src='../viewcontentwriting.php?stat=done&content_id='.$id;
          }
          elseif ($u=='t'){
            $sql1 ='INSERT INTO `dump_jobs`(`user_id`, `submission_date`, `delivery_date`, `amount`, `category`) VALUES ("'.$row["user_id"].'" ,"'.$row["submission_datetime"].'" ,"'.$row["delivery_date"].'" ,"'.$row["amount"].'","typing")';
            $sql2 = 'DELETE FROM `typing` WHERE type_id='.$id;
            $src='../viewtyping.php?stat=done&content_id='.$id;
          }
          elseif ($u=='w'){
          $sql1 ='INSERT INTO `dump_writer`(`id`, `name`, `mobile`, `email`, `address`, `category`) VALUES ("'.$row["id"].'","'.$row["firstname"].' '.$row["lastname"].'" ,"'.$row["mobile"].'" ,"'.$row["email"].'" ,"'.$row["address"].'" ,"writer")';
          $sql2 = 'DELETE FROM `writer` WHERE id='.$id;
          $src='../viewwriters.php?stat=done&id='.$id;
          }
          elseif ($u=='cw'){
            $sql1 ='INSERT INTO `dump_writer`(`id`, `name`, `mobile`, `email`, `address`, `category`) VALUES ("'.$row["id"].'","'.$row["firstname"].' '.$row["lastname"].'" ,"'.$row["mobile"].'" ,"'.$row["email"].'" ,"'.$row["address"].'" ,"contentwriter")';
            $sql2 = 'DELETE FROM `contentwriter` WHERE id='.$id;
            $src='../viewcontentwriter.php?stat=done&id='.$id;
          }
          // kvar_dump($sql1);
          // var_dump($sql2);
          // var_dump($row['mobile']);
          mysqli_query($conn, $sql1) or die("We're Facing some issues");
          mysqli_query($conn, $sql2) or die("We're Facing some issues");
          if($u=='h')
           $link='../assignments/'.$row['assign_name'];
          elseif ($u=='w')
            $link='../writingsample/'.$row['file'];

          unlink($link); 
          header("location:$src");

        }
        else {
          header("Location: ../index.php");
        }
        ?>