<?php
for ($i = 1000; $i<=9999; $i++){
    $is_duplicate = false;
    $tmp = $i;
    $count = 0;
    while ($tmp != 0){
        $first = $tmp%10;
        $second = $tmp = intval($tmp/10);
        while ($second != 0 ){
            if ($first == $second%10){
                $count++;
            }
            $second = intval($second/10);
        }
    }
    if ($count==0)
        echo $i . "<br>";
}