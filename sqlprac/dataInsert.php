<?php

$name =$_POST['name'];
$nic =$_POST['nic'];
$city =$_POST['city'];




//1.connect to database

$host = "localhost";
$user = "root";
$pw = "1234";
$db = "sem3";

$con = mysqli_connect($host,$user,$pw,$db);

// var_dump($con);

//2. execute query
$sql = "INSERT INTO employee (name,nic,city) VALUES ('$name','$nic','$city')";

mysqli_query($con,$sql);

//3 close connection
mysqli_close($con);
header("Location:dataShow.php");

?>