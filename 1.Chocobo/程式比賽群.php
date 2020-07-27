#! /usr/bin/php
<?php
    /**
     * Accepted
     * 46 ms 	5884 KB
     * Jul/24/2020 15:43UTC+8
     */
    $a = (int)trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $b = explode(' ', $b);

    $s1 = 0;
    $s2 = 0;
    $flag = true;
    $bbb = count($b);
    for ($i=0;$i<$bbb;$i++) {
        if ($flag === true) {
            $k = $s1;
        } else {
            $k = $s2;
        }

        $a1 = $b[0];
        $a2 = $b[count($b) - 1];

        if ($a1 >= $a2) {
            $k += $a1;
            array_shift($b);
        } else {
            $k += $a2;
            unset($b[count($b)-1]);
        }

        if ($flag === true) {
            $s1 = $k;
        } else {
            $s2 = $k;
        }

        $flag = !$flag;
    }

    echo $s1 . PHP_EOL;
    echo $s2 . PHP_EOL;