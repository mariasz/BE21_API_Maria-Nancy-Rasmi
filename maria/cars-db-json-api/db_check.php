<?php

require_once("db_connect.php");

$sql = "SELECT * FROM car";
$result = mysqli_query($connect ,$sql);

// saving all records from sql result to an associative array
while($row=$result->fetch_assoc()) 
{ 
    $name=$row['name'];
    $price=$row['price'];
    $picture=$row['picture'];

    $cars[] = array('name'=> $name, 'price'=> $price, 'picture'=> $picture); 
} 

mysqli_close($connect);