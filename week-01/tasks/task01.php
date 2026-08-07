<?php

$x = 5;
$z = 3.14;
$y = "Jhon Doe";
$v = true;
$a = null;
$array1 = [1, 2, 3, 4, 5];
$array2 = array("apple", "banana", "cherry");

var_dump($x); // type of x
var_dump($z); // type of z
var_dump($y); // type of y
var_dump($v); // type of v
var_dump($a); // type of a
var_dump($array1); // type of array1
var_dump($array2); // type of array2

echo $x . "\n"; // val of x
echo $z . "\n"; // val of z
echo $y . "\n"; // val of y
echo $v . "\n"; //val of v
echo $a . "\n"; //val of a
foreach ($array1 as $value) {
    echo $value . "\n"; // val of array1
}
foreach ($array2 as $value) {
    echo $value . "\n"; // val of array2
}
?>