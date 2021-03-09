<?php
$n = 1000;
$max = 0;
$numWithMaxSimpleDiviser = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum = 0;
    for ($j = $i; $j > 0; $j--) {
        if (($i % $j == 0) && isSimple($j)) {
             $sum += $j;
        }
        if ($max<$sum){
            $max = $sum;
            $numWithMaxSimpleDiviser = $j;
        }
    }
}
echo $numWithMaxSimpleDiviser;

function isSimple($value)
{
    $count = 0;
    for ($i = 1; $i<=$value; $i++){
        if ($value%$i == 0){
            $count++;
        }
    }
    if ($count==2){
        return true;
    }
}

