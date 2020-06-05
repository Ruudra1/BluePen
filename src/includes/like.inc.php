<?php
include_once "connect.inc.php";
$blog=$_GET['id'];
session_start();
$id=$_SESSION['id'];
$sql="SELECT * FROM likes WHERE blog_id=$blog";
 $result = mysqli_query($conn, $sql);
 $num=mysqli_num_rows($result);
 if($num==0)
{
    $sql = "INSERT INTO `likes`(blog_id,likes,user_id) VALUES ($blog,1,$id)";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    header("Location: ../new_blog/single.php?id=".$blog);
                    exit();
}
else{
$row=mysqli_fetch_array($result);
$like=$row['likes'];
$like++;

$user=$row['user_id'].",".$_SESSION['id'];

$sql1="UPDATE `likes` SET user_id='$user', `likes`=$like WHERE blog_id=".$blog;
mysqli_query($conn, $sql1) or die(mysqli_error($conn));



header("Location: ../new_blog/single.php?id=".$blog);
                    exit();

}



