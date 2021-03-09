<?php
$n = 1000;
$max = 0;
$maxNum = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum = 0;
    for ($j = $i; $j > 0; $j--){
        if ($i % $j == 0){
            $sum += $j;
        }
        if ($max<$sum){
            $max = $sum;
            $maxNum = $i;
        }
    }
}
echo $maxNum;
