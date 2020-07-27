<?php
    /**
     * Accepted
     * 46 ms 	5884 KB
     * Jul/24/2020 16:12UTC+8
     */
    $in2 = trim(fgets(STDIN));

    $in = trim(fgets(STDIN));
    $ar = explode(' ', $in);


    $a = 0;
    $b = 0;

    $turn = true;

    while($ar) {
        $aa = $ar[0];
        $bb = end($ar);
        $big = 0;

        if ($bb == null) {

            if ($turn) {
                $a += $aa;
            } else {
                $b += $aa;
            }
            break;
        }

        if ($aa > $bb) {
            $big = $aa;
            array_shift($ar);
        } else {
            $big = $bb;
            array_pop($ar);
        }

        if ($turn) {
                $a += $big;

            } else {

                $b += $big;
            }


        $turn = !$turn;
    }

    echo $a .' '. $b;