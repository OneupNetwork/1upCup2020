<?php
/**
 * Accepted
 * 46 ms 	19860 KB
 * Jul/24/2020 16:28UTC+8
 */
 $row1 = fgets(STDIN);
 $source = fgets(STDIN);

 $slpit = fgets(STDIN);
 $slpit = str_replace(' ', '', $slpit);

 $arr = preg_split('/[^'.$slpit.']/', $source);
 if (!is_array($arr)) {
     $arr = array($source);
 }

 $arr = array_filter($arr);

 $r=0;
 while ($arr) {
     $c = strlen(trim(array_pop($arr)));
     if ($c == 0) {
         continue;
     }
     $r += ((1+$c) * $c /2);
 }
 print $r;