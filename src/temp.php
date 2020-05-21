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
  $f =$_GET['f'];
  $u =$_GET['u'];
  if($u=='vw')
    echo '<embed src="http://localhost/bluepen/src/writingsample/'.$f.'" width="100%" height="100%">';
  if($u='vj')
    echo '<embed src="http://localhost/bluepen/src/assignments/'.$f.'" width="100%" height="100%">';
  ?>