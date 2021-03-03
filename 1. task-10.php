<?php
$n = 140;
$dupl = 0;
$revers = 0;
$is_polindrom = false;
for ($i = 0; $i<=$n; $i++){
    $dupl = $i;
//    echo $dupl;
//    echo "<br>";
    while ($dupl != 0){
        $val = $dupl%10;
        $revers = $revers*10+$val;
        $dupl = intval($dupl/10);
    }
//    echo $revers . "<br>";
    if ($revers == $i){
        $sqrNum = $i**2;
        $dupl = $sqrNum;
        $revers = 0;
        while ($dupl){
            $val = $dupl%10;
            $revers = $revers*10+$val;
            $dupl = intval($dupl/10);
        }
        if ($sqrNum == $revers){
            echo $i . "<br>";
        }
    }
    else
        $revers = 0;


}