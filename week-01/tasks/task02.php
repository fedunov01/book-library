<?php

$x = (int) readline(" >> ");

if ($x % 2 == 0) {
    echo "偶数" . "\n";
} else {
    echo "奇数" . "\n";
}

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i: FizzBuzz" . "\n";
    } else if ($i % 3 == 0){
        echo "$i: Fizz" . "\n";
    } else if ($i % 5 == 0){
        echo "$i: Buzz" . "\n";
    }
    
}
?>