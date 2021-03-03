<?php
$n = 41234;
$is_duplicate = false;
while ($n != 0){
    $first = $n%10;
    $second = $n = intval($n/10);
    while ($second != 0){
        if ($first == $second%10){
            $is_duplicate = true;
            $n = 0;
        }
        $second = intval($second/10);
    }
}
if ($is_duplicate)
    echo "duplicate exists";
else
    echo "duplicate not exists";