<?php
$n = 20;
$m = 100;
$max = 0;
$sumdeleter = 0;
$position = 0;
for ($i = $n; $i<=$m; $i++){
    $sumdeleter = 0;
    for ($j=$i-1; $j>0; $j--){
        if ($i % $j == 0) {
            $sumdeleter += $j;
        }
    }
    if ($max<$sumdeleter){
        $max = $sumdeleter;
    }
}
echo $max;
