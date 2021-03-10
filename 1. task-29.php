<?php
$n = 130;
$k = 4;
$isSumEuqals = false;

for ($i = 1; $i <= $n; $i++) {
    $number = $i;
    $isSumEuqals = false;
        if ($k == SumNum($number)) {
            echo $i . "<br>";
        } else {
            $reserv = 0;
            $number = $i;
            while ($number) {
                $reserv = $reserv * 10 + $number % 10;
                $number = intval($number / 10);
                if ($k == SumNum($number)) {
                    echo " - " . $reserv ." - "  ;
                    $isSumEuqals = true;
                    break;
                } else {
                    if ($k == SumNum($reserv)) {
                        echo " - " . $number ." - "  ;
                        $isSumEuqals = true;
                        break;
                    }
                }
            }
        }
        if ($isSumEuqals)
            echo $i . "<br>";
}


function SumNum($number)
{
    $sumNum = 0;
    while ($number) {
        $sumNum += ($number % 10);
        $number = intval($number / 10);
    }
    return $sumNum;
}