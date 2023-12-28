
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data from Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd; 
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; 
        }
    </style>
</head>
<body>

<h1><b>Employee Table</b></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>City</th>
            <th>update</th>
            <th>delete</th>
            
        </tr>


        
        <?php


//1.connect to database

$host = "localhost";
$user = "root";
$pw = "1234";
$db = "sem3";

$con = mysqli_connect($host,$user,$pw,$db);

// var_dump($con);

//2. execute query
$sql = "SELECT * FROM employee";
$rs  = mysqli_query($con,$sql);

mysqli_query($con,$sql);

//3.fetch data and show them

while($row = mysqli_fetch_assoc($rs)){
    // echo $row['id'],"-",$row['name'],"-",$row["nic"],"-",$row["city"],"</br>";
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
?>   
    </table>
<?php
     mysqli_close($con);
?>


</body>
</html>

