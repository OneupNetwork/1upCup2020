#! /usr/bin/php
<?php
    /**
     * Accepted
     * 77 ms 	5888 KB
     * Jul/24/2020 16:54UTC+8
     */
    $a = trim(fgets(STDIN));
    $a = explode(' ', $a);
    $b = trim(fgets(STDIN));

    $s = '';
    $c = $a[1];

    if ($a[1] == 0) {
        echo $b . PHP_EOL;
    } elseif ((int)$a[0] === 1 && (int)$a[1] === 1) {
        echo 0 . PHP_EOL;
    } else {
        for ($i=0;$i<$a[0];$i++) {
            if ($i == 0 && $b[$i] != 1) {
                $s = '1';
                $c--;
                continue;
            }

            if ($i == 0 && $b[$i] == 1) {
                $s = '1';
                continue;
            }

            if ($b[$i] != 0 && $c > 0) {
                $s .= '0';
                $c--;
            } else {
                $s .= $b[$i];
            }

            // if ($b[$i] != 0) {
            //     $s = sprintf('%s0', $s);
            //     $c++;
            // }

            // if ($c >= $a[1] || $i == $a[0]-1) {
            //     echo json_encode([$i+2, $a[0] - $i-1]) . PHP_EOL;
            //     $s = $s . substr($b, $i+2, $a[0] - $i-1);
            //     break;
            // }
        }

        // if (strlen($s) < $a[0]) {
        //     $s = sprintf('%s', $s);
        // }
        echo $s . PHP_EOL;
    }
