<?php

$array = [1, 12, 3, 14, 5, 16, 7, 18, 9, 10];

function normaliser($str, $age) {
    $str = strtolower($str);
    $str = $str . " " . $age;
    $str = str_replace(" ", "_", $str);
    return $str;
}



echo normaliser("John Doe", 15) . "\n"; 
echo implode(", ", array_filter($array, function ($array) {
    return $array > 10 ;
}));
?>