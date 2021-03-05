<?php
$isValid = true;
$isDuplicate = false;

for ($i = 1000; $i <= 9999; $i++) {

    if (!findDuplicate($i)) {
        $tmp = $i;
        while ($tmp != 0) {
            $prob = $tmp % 10;
            if (!(($prob == 0) || ($prob == 2) || ($prob == 3) || ($prob == 7))) {
                $is_valid = false;
                break;
            } else {
                $is_valid = true;
                $tmp = intval($tmp / 10);
            }
        }
    }
    if ($is_valid) {
        echo $i . "<br>";
    }
}

function findDuplicate($value)
{
    while ($value != 0) {
        $first = $value % 10;
        $second = $value = intval($value / 10);
        while ($second != 0) {
            if ($first == $second % 10) {
                return true;
            }
            else
            $second = intval($second / 10);
        }
    }
}
