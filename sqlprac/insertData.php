<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>City</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
<?php
//connect to database -->mysqli_connect()
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "sem3";

$con = new mysqli($host,$user,$pass,$db);
$sql = "INSERT INTO employee(name,nic,city) VALUES ('kasun','11213143143','colombo' )";


//execute query --> mysqli_Query()

$result = $con->query($sql);
 while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>". $row['id']. "</td>" ;
    echo "<td>". $row['name']. "</td>";
    echo "<td>". $row['nic']. "</td>";
    echo "<td>". $row['city']. "</td>";
    echo "<td><a href='updateform.php?id=".$row['id']."'> update</a></td>";
    // echo "<td><a href='update.php'>". "update". "</td>";
    echo "<td><a href='delete.php?id=".$row['id']."'> delete</a></td>";
    echo "<tr>";
 }
 $con->close();
 ?>
    </table>


    
    
</body>
</html>





