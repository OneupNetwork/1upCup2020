<?php
/**
 * Accepted
 * 608 ms 	5888 KB
 * Jul/24/2020 16:06UTC+8
 */
list($n, $k) = explode(' ', trim(fgets(STDIN)));
$number = trim(fgets(STDIN));

if ($k ==0 ) {
    echo $number;
    exit;
}
if (strlen($number) === 1) {
    echo 0;
    exit;
}

$length = strlen($number);

for ($i =0; $i < $length; $i++) {
    if ($i==0) {
        if ($number[$i] == 1) {
            echo $number[$i];

        } else {
            --$k;
            echo 1;
        }
    } elseif ($number[$i] == 0) {
        echo $number[$i];
    } elseif ($k-- > 0) {
        echo 0;
    } else {
        echo substr($number, $i);
        exit;
    }
}