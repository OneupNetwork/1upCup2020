<?php
/**
 * Accepted
 * 46 ms 	17720 KB
 * Jul/24/2020 15:53UTC+8
 */
// for example, the input is '5 9'
$number = trim(fgets(STDIN));

$arr = [];
$allIn = [];
$index = -1;

$result = trim(fgets(STDIN));
$ary = explode(' ', $result);

$c = 1;
for ($i = 0; $i < $number; $i++) {
    if ($ary[$i] > $ary[$i+1]) {
        $c_ary[] = $c;
        $c = 1;
        continue;
    } else {


        $c++;

    }
}
sort($c_ary);

if (count($c_ary) == 0) {
    echo $c;
} else {
    echo $c_ary[count($c_ary)-1];
}