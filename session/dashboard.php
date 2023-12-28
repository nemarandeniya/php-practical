<?php
session_start();
    if (!isset($_SESSION['username'])) {
        echo "You are not logged in";
    }else {
        echo "<h1>Welcome ". $_SESSION['username']."</h1>";
        
            
    }
    // if (isset($_SESSION['username'])) {
    //     //ok
    //       echo"<h1>wecome ". $_SESSION['username']."</h1>";
    //  }else{
    //     //error
    //  }

?>