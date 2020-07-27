<?php
/**
 * Accepted
 * 46 ms 	5880 KB
 * Jul/24/2020 16:50UTC+8
 */
$totalCases = trim(fgets(STDIN));

for ($i = 0; $i < $totalCases; $i++) {
    $totalPackages = trim(fgets(STDIN));
    $pos = [];
    $xs = [];
    $ys = [];

    for ($j =0 ; $j < $totalPackages; $j++) {
        list($x, $y) = explode(' ', trim(fgets(STDIN)));
        $pos[] = [$x, $y];
        $xs[] = $x;
        $ys[] = $y;
    }
     array_multisort($pos, $xs, SORT_ASC, $ys, SORT_ASC);
     $prevX = 0; $prevY = 0;
     $step = "";
     $hasAnswer = true;

    foreach ($pos as $data) {
        $x = $data[0];
        $y = $data[1];

        if ($x < $prevX || $y < $prevY) {
            echo "NO\n";
            $hasAnswer = false;
            break;
        }

        $step .= str_repeat("R", $x - $prevX);
        $step .= str_repeat("U", $y - $prevY);
        $prevX = $x;
        $prevY = $y;
    }

    if ($hasAnswer) {
        echo "YES\n" . $step . "\n";
    }
}