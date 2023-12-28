<?php
// include("dataInsert.php");

// $id  = $_POST['id'];
// $name  = $_POST['name'];
// $nic  = $_POST['nic'];
// $city  = $_POST['city'];
$id=$_GET['id'];
$name=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style></style>
</head>
<body>
    <form action="" method="GET">
        <table border="1px solid black">
            <tr>
                <td>
                ID
                </td>
                <td>
                <input type="text" value="<?php echo "$id" ?>" name="id" required>
                </td>
            </tr>
            <tr>
                <td>
                NAME
                </td>
                <td>
                <input type="text" value="<?php echo "$name" ?>" name="name" required>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>