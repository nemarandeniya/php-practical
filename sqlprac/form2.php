<form action="update_process.php" method="post">
            <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            <label for="grade">Grade:</label>
            <input type="text" name="grade" value="<?php echo $row['grade']; ?>"><br>
            <input type="submit" value="Update">
        </form>