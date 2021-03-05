<?php
$n = 25;
$main = 0;
$bin = 0;
while ($n){
    if ($n % 2 == 0){
        $main = $main*10 + $n % 2;
    }
    else{
        $main = $main*10 + $n % 2;
        $n -=1;
    }
    $n = intval($n / 2);
}
while ($main){
    $bin = $bin*10 + $main % 10;
    $main = intval($main /10);
}
echo $bin;
