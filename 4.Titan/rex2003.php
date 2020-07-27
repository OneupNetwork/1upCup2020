<?php
/**
 * Accepted (Practice)
 * 31 ms 	5880 KB
 * Jul/24/2020 18:06UTC+8
 */
$n = trim(fgets(STDIN));

$a = str_repeat('9', strlen($n) - 1);
$b = (string) ($n - $a);

$sum = 0;
for ($i = 0; $i < strlen($a); $i++) {
    $sum += (int) $a[$i];
}
for ($i = 0; $i < strlen($b); $i++) {
    $sum += (int) $b[$i];
}

echo $sum;