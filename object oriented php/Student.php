<?php

// class Student{
//     public $name;//properties,attributes,data,
//     public $age;
//     public static $institute;
// }

// $st1 = new Student();
//  $st1->name = "Kamal";

// echo $st1->name;


//  $st = new Student();
//  $st->age = 20;

// echo $st->age;

// $st2 = new Student();
// $st2->gender = "Male";//php dynamic object support nisa error enne na

// echo $st2->gender;

// Student :: $institute = "W3 Campus";

// echo Student ::$institute;


class Srilankan{
    public $fav_pol_party;
    public static $government;
}

$sl1 = new Srilankan();
$sl1 -> fav_pol_party = "UNP";

$sl2 = new Srilankan();
$sl2 -> fav_pol_party = "Pohottuwa";

echo $sl2->fav_pol_party;
?>