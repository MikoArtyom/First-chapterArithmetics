<?php
$n = 33;
$m = 34;

if (NOD($n,$m) == 1){
    echo "числа взаимо простые!";
}
else{
    echo "unlucky";
}


function NOD($val1, $val2){
    while ($val1 != $val2){
        if ($val1 > $val2){
            $val1 = $val1 - $val2;
        }
        else
        {
            $val2 = $val2 - $val1;
        }
    }
    return $val1;
}

