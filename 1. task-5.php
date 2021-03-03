<?php
$n = intval(1234);
$k = "";

while ($n != 0){
    $k .= strval($n%10);
    $n = intval($n/10);
}
echo $k;