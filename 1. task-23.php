<?php
//$n = 6752;
$n = 2751;
$is_sorted = false;
$sortedNum = 0;

while ($n > 0) {
    $digit = $n % 10;

    $temp = intval($n / 10);

    while ($temp > 0) {
        $t = $temp % 10;

        if ($t < $digit) {
            $digit = $t;
        }
        $temp = intval($temp / 10);
    }
    $sortedNum = $sortedNum * 10 + $digit;
    $n = getSortedNum($n, $digit);

}
echo $sortedNum;


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

