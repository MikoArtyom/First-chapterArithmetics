<?php
$n = 30;
$m = 500;

for ($i = $n; $i <= $m; $i++) {
    for ($j = $i + 1; $j <= $m; $j++) {

        $sumDiviserFirst = 0;
        $sumDiviserSecond = 0;

        for ($k = 1; $k <= $i - 1; $k++) {
            if ($i % $k == 0) {
                $sumDiviserFirst += $k;
            }
        }

        for ($k = 1; $k <= $j - 1; $k++) {
            if ($j % $k == 0) {
                $sumDiviserSecond += $k;
            }
        }

        if ($sumDiviserFirst == $j && $i == $sumDiviserSecond) {
            echo $i . " - " . $j . "<br>";
        }
    }
}

