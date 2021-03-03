<?php
$countIteration = 0;
for ($i = 1; $i<=250; $i++){
    for ($j = 1; $j<=250; $j++){
            if (isSimpleNum($i) && isSimpleNum($j) && ($j - $i == 2)) {
                $countIteration++;

                if ($countIteration > 10){
                    exit();
                }
                else
                echo $i . " " . $j . "<br>";

            }

    }
}

function isSimpleNum($value){
    $count = 0;
    for ($i = 1; $i<=$value; $i++){
        if ($value%$i == 0){
            $count++;
        }
    }
    if ($count==2){
        return true;
    }
}