<?php
$n = 300;

for ($i = 1; $i <= $n; $i++) {
        if (isSimple($i) && isSimple($i+2)) {
            if (($i+2) - $i == 2){
                echo $i . " - " . ($i+2) . "<br>";
            }
        }
}

function isSimple($value)
{
    $count = 0;
    for ($i = 1; $i <= $value; $i++) {
        if ($value % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        return true;
    }
}
