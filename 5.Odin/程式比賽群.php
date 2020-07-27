#! /usr/bin/php
<?php
    /**
     * Accepted
     * 577 ms 	11576 KB
     * Jul/24/2020 17:11UTC+8
     */
    function aaa($a)
    {
        $a = $a * ($a + 1);
        $a = $a / 2;

        return $a;
    }

    $a = trim(fgets(STDIN));
    $a = explode(' ', $a);
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    $c = explode(' ', $c);

    $s = '';
    $tmp = [];
    for ($i=0;$i<strlen($b);$i++) {
        if (in_array($b[$i], $c)) {
            $s .= $b[$i];
        } else {
            $s = $s . ' ';
        }
     }

     $s = explode(' ', trim($s));

     $sum = 0;
     foreach ($s as $v) {
         $sum += aaa(strlen($v));
     }

     echo $sum . PHP_EOL;