<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];




$users = [['username'=> "Kamal",'password'=>'123'],
         ['username'=> "Nimal",'password'=>'456'],
         ['username'=> "Amal ",'password'=>'789']];

$isLoggedIn = false;

foreach($users as $user){
    if($user['username'] == $username && $user['password'] == $password){
        //valid user
        $isLoggedIn = true;
         setcookie("username",$username,time()+3600);
        header("Location: createcookie.php?user=$username");
        break;
    }
  }
  if(!$isLoggedIn){
    echo "Invalid Credentials <a href='login.html'>Back to Login</a> ";
  }
}
?>