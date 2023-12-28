<?php
session_start();
if($_SERVER['REQUEST_METHOD'] !="POST"){
    header("Location:login.html");
}else{
if(isset($_POST['username'])&&isset($_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    $users = [
        ['username'=>"Kamal" , "password"=>'123'],
        ['username'=>"chamod", "password"=>'456'],
        ['username'=>"Pradeep","password"=>'789'],
    ];

    foreach($users as $user){
        if(($_POST['username']==$user['username'])&&($_POST['password']==$user['password'])){
            header("Location:dashboard.php");
            date_default_timezone_set("Asia/Colombo");
            $time = date("Y/m/d h:i:s");
            $file = fopen("user.txt","a");
            fwrite($file,$_SESSION['username']."---".$time."\n");
            fclose($file);
            break;
        }
    }
    echo"Access Denied<a href='login.html'>Back to login</a>";
}else{
    header("Location:login.html");
}
}
?>