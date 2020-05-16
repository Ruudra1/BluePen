<?php
include_once "connect.inc.php";
session_start();
$blog=$_GET['id'];
$id=$_SESSION['id'];
$sql="SELECT * FROM comments WHERE user_id=".$_SESSION['id']. " AND blog_id=$blog";
$result=mysqli_query($conn,$sql);

if (isset($_POST['submit']))
{
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    if($comment == NULL)
    {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
    }
    else{
        
            $date=date("Y-m-d");
        $sql = "INSERT INTO `comments`(`comments`, user_id,blog_id, `date`) VALUES ('$comment',$id,$blog,'$date')";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
    }
}
?>



