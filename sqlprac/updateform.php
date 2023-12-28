<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Update Form</title>
</head>

<body>
    <?php
    $id = $_GET['id'];

    $host = "localhost";
    $user = "root";
    $pw = "1234";
    $db = "sem3";

    $con = mysqli_connect($host, $user, $pw, $db);

    $sql = "SELECT * FROM employee WHERE id=$id";

    $rs = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($rs);

    mysqli_close($con);

    ?>
    <h1>Employee Update Form</h1>

    <form action="update.php " method="post">
        <input type="hidden" name="id" value=<?= $row['id'] ?> > <!-- php echo = (=) -->
        <label>Name : <input type="text" name="name" value=<?= $row['name'] ?> /></label> <br><br>
        <label>Nic : <input type="text" name="nic" value=<?= $row['nic'] ?> /></label> <br><br>
        <label>
            <select name="city">
                <!-- <option> Colombo </option>
                <option> Galle </option>
                <option> Kandy </option>
                <option> Jaffna </option> -->
                <?php 
                $arrs = array ("Colombo","Kandy","Jaffna","Galle");
                foreach ($arrs as $arr) {
                    if($arr==$row['city']){
                        echo "<option value='$arr' selected>$arr</option>";
                    }else{
                        echo "<option value='$arr'>$arr</option>";
                    }
                }
                ?>
            </select>
        </label><br><br>

        <input type="submit">
        <input type="reset">

    </form>
</body>

</html>