<?php

$servername = "localhost";      //this also works: $localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cars";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//this also works instead of line 10-12:
// if($connect->connect_error) {
//     die("Connection failed: " . $connect->connect_error);
// }