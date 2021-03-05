<?php
$n = 20;
for ($i = 0; $i<=$n; $i++){
    for ($j = 0; $j<=$n; $j++){
        if ($i*$j==$n){
            echo $i . " * " . $j . "<br>";
        }
    }
}