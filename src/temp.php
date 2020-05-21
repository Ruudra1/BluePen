<?php
session_start();
  $f =$_GET['f'];
  $u =$_GET['u'];
  if($u=='vw')
    echo '<embed src="http://localhost/bluepen/src/writingsample/'.$f.'" width="100%" height="100%">';
  if($u='vj')
    echo '<embed src="http://localhost/bluepen/src/assignments/'.$f.'" width="100%" height="100%">';
  ?>