<?php
for ($i = 1000; $i<=9999; $i++){
    if ($i % 2 == 0){
       $first = intval($i)/1000%10 ;
       $second = intval($i)/100%10;
       $third = intval($i)/10%10;
       $fourth = intval($i%10);
       if ((($first<$second) && ($second<$third) && ($third<$fourth))
       || (($first>$second) && ($second>$third) && $third>$fourth)){
           echo $i . "<br>";
       }
    }
}
