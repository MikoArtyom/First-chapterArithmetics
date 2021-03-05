<?php
$n = intval(1234);
$k = 0;

while ($n != 0){
    $k =$k*10 + strval($n % 10);
    $n = intval($n / 10);
}
echo $k;