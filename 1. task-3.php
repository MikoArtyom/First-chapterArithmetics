<?php
$data = 125456;
$first =  $data%10;
$data = intval($data/10);
$is_order = true;
while ($data != 0){
    $second = $data%10;
    $data = intval($data/10);
    if ($first<$second){
        $is_order = false;
        break;
    }
    $first = $second;
}
if ($is_order){
    echo "good";
}
else{
    echo "bad";
}
