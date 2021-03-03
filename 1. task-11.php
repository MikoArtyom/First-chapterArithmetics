<?php
//$sumdelel = 0;
for($i = 1; $i<=1000; $i++){
    $dupl = $i;
    $sumdelel = 0;
    while ($dupl){
        $val = $dupl%10;
        $sumdelel += $val;
        $dupl = intval($dupl/10);
    }
    if ($i%$sumdelel == 0){
        echo $i . "<br>";
    }
}