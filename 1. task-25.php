<?php
$n = 1000;
$sum = 0;
$count = 0;
for ($i = 1; $i <= $n; $i++) {
    $dupl = $i;
    $sumFactNum = 0;
    while ($dupl) {
        $sumFactNum += factarial($dupl % 10);
        $dupl = intval($dupl / 10);
    }
    if ($sumFactNum == $i) {
        $sum += $i;
        $count++;
    }

}
echo "Sum = " . $sum . " Count = " . $count;

function factarial($val)
{
    if ($val <= 1)
        return 1;
    return $val * factarial($val - 1);
}

