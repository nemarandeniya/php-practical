<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Employee Table</title>
</head>
<body>
    <table border="1px" width = "100%">
        <thead>
        <th>ID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>City</th>
        </thead>
        <tbody>
            <?php
             $host = "localhost";
             $user = "root";
             $pw = "1234";
             $db = "sem3";

             $con = new mysqli($host,$user,$pw,$db);

             $sql = "SELECT * FROM employee";

             $rs = $con->query($sql);

             while ($row = $rs->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row['id']. "</td>" ;               
                echo "<td>". $row['name']. "</td>";
                echo "<td>". $row['nic']. "</td>";
                echo "<td>". $row['city']. "</td>";
                echo "</tr>";
             }

             $con ->close();
            ?>

        </tbody>
    </table>
</body>
</html>