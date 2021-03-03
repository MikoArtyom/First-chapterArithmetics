<?php
$n = 3434;
$countNum = 0;
$dupl = $n;
while($dupl){
    $countNum++;
    $dupl = intval($dupl/10);
}
if ($countNum % 2 == 0){
    $firstPart = $n;
    $halfNum = $countNum/2;
    while ($halfNum != 0){
        $firstPart = intval($firstPart/10);
        $halfNum--;
    }
    $halfNum = $countNum/2;
    $secondPart = 0;
    while ($halfNum != 0){
        $secondPart = $secondPart*10 + ($n%10);
        $n = intval($n/10);
        $halfNum--;
    }
    $reversSecond = 0;
    while ($secondPart){
        $reversSecond = $reversSecond*10 + $secondPart%10;
        $secondPart = intval($secondPart/10);
    }
    if ($firstPart == $reversSecond){
        echo "number symmetrical";
    }
    else{
        echo "unlucky";
    }

}




