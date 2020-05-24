

<?php
include_once "includes/connect.inc.php";
session_start();
// $userid = $_SESSION['id'];
// var_dump($userid);
// $sql = "SELECT LAST from 'assign_name' FROM 'assignments' WHERE 'user_id' = $userid";
// var_dump($sql);
  
$path = 'writingsample/bhavyaharia10@gmail.comMumbai University Exam Circular 18052020.pdf';
$totoalPages = countPages($path);
echo 'no of pages are:';
echo $totoalPages;

$amount = $totoalPages*6;

echo' <br> amount will be:';
echo $amount;
  
function countPages($path)
{
  // var_dump($path);
  $pdftext = file_get_contents($path);
  // var_dump($pdftext);
  $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
  // var_dump($dummy);
  return $num;
}

echo '<br>';
$id = $_SESSION["id"];
$result= mysqli_query($conn, "SELECT * FROM assignments WHERE user_id=$id ORDER BY assign_id DESC LIMIT 1;");
$row = mysqli_fetch_array($result);
$amount = $row["amount"];
var_dump($amount);

// $id=$_SESSION['id'];
// var_dump($id);
// $amount = $_SESSION['amount'];
// var_dump($amount);
// SELECT $id.* FROM assignments AS id WHERE id.amount = (SELECT MAX(amount) FROM assignments AS amount WHERE amount.id = $id);
// $sql = "SELECT $id.* FROM assignments AS id WHERE id.amount = (SELECT MAX(amount) FROM assignments AS amount WHERE amount.id = $id);";
// $sql = "SELECT amount FROM assignments WHERE user_id=6 ORDER BY assign_id DESC LIMIT 1";
// var_dump($sql);
// $sqli = mysqli_query($conn, $sql) or die(mysqli_error($conn));
// var_dump($sqli);
// $amount = "SELECT amount FROM assignments WHERE id = $id";
// var_dump($amount);
  
?>
<!-- query to select pdf -->
<!-- SELECT LAST (column_name) FROM table_name;   -->
<!-- run this query with condition where id == logged in id -->