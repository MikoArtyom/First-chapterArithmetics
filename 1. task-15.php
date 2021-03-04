<?php
$n = 44;
$count = 0;
for ($i=$n-1; $i>=1; $i--){
    if($n % $i == 0){
        $count++;
    }
}
echo $count;