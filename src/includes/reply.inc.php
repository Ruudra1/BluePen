<?php
include_once "connect.inc.php";
session_start();
$bid=$_GET['bid'];
$id=$_GET['id'];
if (isset($_POST['submit']))
{
    