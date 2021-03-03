<?php
$is_valid = true;
for ($i = 1000; $i <= 9999; $i++){
    $tmp = $i;
    while ($tmp!=0){
        $prob = $tmp%10;
        if (!(($prob==0) || ($prob==2) || ($prob==3) || ($prob==7))){
            $is_valid = false;
            break;
        }
        else{
            $is_valid = true;
            $tmp = intval($tmp/10);
        }
    }
    if ($is_valid){
        echo $i . "<br>";
    }
}