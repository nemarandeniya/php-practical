
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<?php
$rid = $_GET['id'];
$rname = $_GET['name'];
$rnic = $_POST['nic'];
$rcity = $_POST['city'];

$con=mysqli_connect('localhost','root','1234','sem3');

if($_SERVER["REQUEST_METHOD"]=="GET"){



    echo "Record to be updated: ID = $rid , NAME = $rname , NIC = $rnic , CITY = $rcity";
}else{
    $id = 1;
    $sql = "SELECT * FROM employee WHERE id=$rid";
     $result = mysqli_query($con,$sql);

     $row = mysqli_fetch_assoc($result);
     ?>

<form action="dataShow.php" method="post">
        <input type="hidden" name="id" >
        <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo ""; ?>"><br><br>
        <label for="nic">NIC:</label>
            <input type="text" name="nic" value=$rnic><br><br>
        <label for="city">CITY:</label>
            <input type="text" name="city" value=$rcity><br><br>

            <input type="submit" value="Update">
    </form>
    <?php
    echo "$rid";
} 
mysqli_close($con);

?>

</body>
</html>

// 

// 


    
