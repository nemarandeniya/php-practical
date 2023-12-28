<?php
$id=$_GET['id'];
//echo "This Deleted user name: $name";

$conn=mysqli_connect('localhost','root','1234','sem3');

$sql="DELETE FROM employee WHERE id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header("Location:dataShow.php")
?>