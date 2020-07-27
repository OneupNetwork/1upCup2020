<?php
/**
 * Accepted
 * 46 ms 	5888 KB
 * Jul/24/2020 16:23UTC+8
 */
$n = trim(fgets(STDIN));

$a = floor($n / 2);

$len = strlen((string)$a);
$firstDigit = substr($a, 0, 1);

$a = $firstDigit . str_repeat(9, $len - 1);
$b = (string)($n - $a);

$alen = strlen($a);
$blen = strlen($b);
$total = 0;
for ($i = 0; $i < $alen; $i++) {
    $total += $a[$i];
}

for ($i = 0; $i < $alen; $i++) {
    $total += $b[$i];
}

echo $total;