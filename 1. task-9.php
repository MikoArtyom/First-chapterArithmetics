<?php
$n = 52;
$is_authomorf = true;
$sqrNum = $n ** 2;
while ($n != 0){
    if ($n%10 == $sqrNum%10){
        $n = intval($n/10);
        $sqrNum  = intval($sqrNum/10);
    }
    else{
        $is_authomorf = false;
        break;
    }
}
if ($is_authomorf)
    echo "number is authmorf";
else
    echo "number not is authmorf";