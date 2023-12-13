<?php
$name = "pratik";
$surname = "thakare";
$age = 24;
$info = [
    [
    "name"      =>  "Pratik",
    "surname"  =>  "Thakare",
    "age"       =>  24,
    "weight"    => 61.3

        ],
 [
    "name"      =>  "abc",
    "surname"  =>  "res",
    "age"       =>  22,
    "weight"    => 73.3

]];
// echo "my name is $info[0][name] $info[0][surname] <br> and my age is $info[0][age] wight is $info[0][weight] ";
echo $info[0]['name'];