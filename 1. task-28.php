<?php

$n = 200;
$sortedNum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sortedNum = 0;
    $number = $i;
    while ($number > 0) {
        $digit = $number % 10;

        $temp = intval($number / 10);

        while ($temp > 0) {
            $t = $temp % 10;

            if ($t > $digit) {
                $digit = $t;
            }
            $temp = intval($temp / 10);
        }
        $sortedNum = $sortedNum * 10 + $digit;
        $number = getSortedNum($number, $digit);

    }
    echo $sortedNum . "<br>";
}

function getSortedNum($number, $digit)
{
    global $sortedNum;
    $newNumber = 0;
    $isRepeat = false;
    while ($number > 0) {
        $t = $number % 10;
        if ($t != $digit) {
            $newNumber = $newNumber * 10 + $t;
        } else if ($t == $digit) {
            if ($isRepeat) {
                $sortedNum = $sortedNum * 10 + $t;
            } else {
                $isRepeat = true;
            }
        }
        $number = intval($number / 10);
    }
    return $newNumber;

}