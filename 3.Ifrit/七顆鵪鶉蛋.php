<?php
/**
 * Accepted
 * 77 ms 	19816 KB
 * Jul/24/2020 16:17UTC+8
 */
// for example, the input is '5 9'
fscanf(STDIN, '%d %d', $num, $limit);

$arr = [];
$allIn = [];
$index = -1;

$data = trim(fgets(STDIN));

if($limit == 0){
    echo $data;
}elseif($data < 10){
    if($limit > 0){
    echo 0;
    }else{
        echo $data;
    }
}else{
    $arr = str_split($data);
    for($i=0;$i<$num;$i++){
        if($i==0 ){
            if($arr[$i]>1 && $limit>0){
                $arr[$i] = 1;
                $limit--;
            }
        }elseif($arr[$i] != 0){
            if($limit > 0){
                $arr[$i] = 0;
                $limit--;
            }
        }
    }
    $r = implode('', $arr);
    echo $r;
}