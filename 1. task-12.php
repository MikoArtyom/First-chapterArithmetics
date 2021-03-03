<?php
$n = 43;
$count = 0;
if ($n>0){
    for ($i = 1; $i<=$n; $i++){
        if ($n%$i == 0){
            $count++;
        }
    }
    if ($count==2){
        echo "prime number";
    }
    else{
        echo "unlucky";
    }
}