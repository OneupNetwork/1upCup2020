<?php
/**
 * Accepted (Practice)
 * 46 ms 	19844 KB
 * Jul/24/2020 18:21UTC+8
 */
// 解題方向：用 '不能用' 的字母來切字串，在分別算每個字串的組合數加總

list($len, $keys) = trim(fgets(STDIN));

$str = trim(fgets(STDIN));
$pattern = '/[^' . str_replace(' ', '', trim(fgets(STDIN))) . ']/';

$r = array_reduce(preg_split($pattern, $str), function($total, $substr) {
    $l = strlen($substr);
    return $total + ($l * ($l + 1))/2;

}, 0);

echo $r;