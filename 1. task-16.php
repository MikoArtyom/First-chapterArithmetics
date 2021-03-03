<?php
$n = 5;
$m = 1000;
for ($i = $n; $i<=$m; $i++){
    $sumDelete = 0;
    for ($j=$i-1; $j>=1; $j--){
        if ($i%$j==0){
            $sumDelete +=$j;
        }
    }
    if ($i==$sumDelete){
        echo $i . " --- " . $sumDelete . "<br>";
    }
}
