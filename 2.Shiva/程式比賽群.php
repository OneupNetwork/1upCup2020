#! /usr/bin/php
<?php
    /**
     * Accepted
     * 46 ms 	13656 KB
     * Jul/24/2020 15:54UTC+8
     */
    $a = (int)trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $b = explode(' ', $b);

    $sum = 0;
    $max = 0;
    for ($i=0;$i<$a-1;$i++) {
        if ($b[$i+1] >= $b[$i]) {
            $sum++;
        } else {
            $max = max($max, $sum);
            $sum = 0;
        }
    }

    $max = max($max, $sum);

    echo $max + 1 . PHP_EOL;