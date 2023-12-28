<?php
  if(isset($_COOKIE['username'])){
    //valid
    header("Location:dashboard.php");
  }else {
    //invalid
    header("Location:login.html");
  }
?>