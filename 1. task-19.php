<?php
$n = 72;
$m = 27;
$nok = 0;
for ($i = $n; $i>0; $i--){
    if ($m % $i == 0 && $n % $i == 0){
        $nok = ($m*$n)/$i;
        break;
    }
}
echo $nok;
