<?php
$n = 22;
$m = 33;

for ($i=$n; $i>0; $i--){
    if ($n%$i==0 && $m%$i==0){
        echo $i;
        exit();
    }
}