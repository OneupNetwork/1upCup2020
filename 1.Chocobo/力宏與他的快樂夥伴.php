<?php
/**
 * Accepted
 * 46 ms 	5884 KB
 * Jul/24/2020 15:54UTC+8
 */
$a=trim(fgets(STDIN));
$b=explode(' ',trim(fgets(STDIN)));

//rsort($b);
for ($i =0 ;$i<$a;$i++) {

    if($b[0] > $b[count($b)-1]) {
        $n[$i%2] += array_shift($b);

    }else {
        $n[$i%2] += array_pop($b);

    }

}

     echo (int)$n[0].' '. (int)$n[1];