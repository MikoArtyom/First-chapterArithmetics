<?php
$isOrder = true;
$isDesc = true;
$countDesc = 0;
$countOrder = 0;
for ($i = 1000; $i <= 9999; $i += 2) {
    $value = $i;
    $count = 0;
    while ($value){
        $count++;
        $value = intval($value / 10);
    }
    $value = $i;
    $first = $value % 10;
    $value = intval($value / 10);
    $countDesc = 0;
    $countOrder = 0;
    while ($value) {
        if ($first < ($value % 10)) {
           $countDesc++;
        }

        if ($first > ($value % 10)){
            $countOrder++;
        }

        $first = intval($value % 10);
        $value = intval($value / 10);
    }
    if ($countOrder == $count-1 || $countDesc == $count-1){
        echo $i. "<br>";
    }

}
