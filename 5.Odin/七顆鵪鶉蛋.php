<?php
/**
 * Accepted
 * 62 ms 	17756 KB
 * Jul/24/2020 16:50UTC+8
 */
// for example, the input is '5 9'
fscanf(STDIN, '%d %d', $num, $limit);

$data = trim(fgets(STDIN));
$limit_data = explode(' ', trim(fgets(STDIN)));

$m = 0;
$result =0;
$arr = str_split($data);
for($i=0;$i<$num;$i++){
    if(in_array($arr[$i], $limit_data)){
        $m++; //一組一組的

    }else{
        if($m > 0){
            //echo $m.' ';
            $m = $m*($m+1)/2;
            $result+=$m;
        }
        $m = 0;
    }
}
if($m>0){
    $m = $m*($m+1)/2;
    $result+=$m;
}
echo $result;