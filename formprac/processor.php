<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){

 $fullName = $_GET['fname'];
 $name_parts = explode(' ', $fullName);
 $firstName = $name_parts[0];
 $currentYear = date('Y');
 $dob = $_GET['birthdate'];
 $age = ($currentYear - $dob);
 $Gender = $_GET['gender'];
 $Status = $_GET['Status'];
 $length = strlen($fullName);



 if ($Gender === 'Male') {
    echo "<h1><b>Welcome Mr $firstName <b></h1><br>";
 } else {
   if ($Status === 'Married') {
      echo "<h1><b>Welcome Mrs $firstName <b></h1><br>";
   } else {
      echo "<h1><b>Welcome Ms $firstName <b></h1><br>";
   }
   
 }
 if ($length < 3) {
   echo "<script type='text/javascript'>alert('Enter valid name')</script> ";
 }
 
 echo "Full name : $fullName <br>";
 
 echo "Age : $age <br>";

}
?>