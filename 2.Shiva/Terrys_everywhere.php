<?php
/**
 * Accepted
 * 78 ms 	13644 KB
 * Jul/24/2020 15:42UTC+8
 */

$totalDays = fgets(STDIN);
$ary = explode(' ', trim(fgets(STDIN)));
$maxIncSeq = 0;
$incSeq = 1;

for ($i =0; $i < $totalDays - 1; ++$i) {
    if ($ary[$i+1] >= $ary[$i]) {
        $incSeq++;
    } else {
        $maxIncSeq = max($maxIncSeq, $incSeq);
        $incSeq = 1;
    }
}
$maxIncSeq = max($maxIncSeq, $incSeq);
echo $maxIncSeq;