<?php

$dbServername= "localhost";
$dbUsername= "phpmyadmin";
$dbPassword= "bluepen";
$dbName= "blue-pen";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");

