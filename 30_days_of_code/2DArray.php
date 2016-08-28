<?php

$handle = fopen ("php://stdin","r");
$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
   $arr_temp = fgets($handle);
   $arr[] = explode(" ",$arr_temp);
  array_walk($arr[$arr_i],'intval');
}

$result = [];
$centerIndex = 1;
for ($arr_i = 0; $arr_i < 16; $arr_i++) {
    
    if ($centerIndex > 4) {
        $centerIndex = 1;
    }
    
    $leftIndex = intval($arr_i / 4);
       
    if ($arr_i < 4) {
        $rightIndex = $arr_i;
    } else {
 
        if ($arr_i % 4 == 0) {
            $rightIndex = 0;
        } else { 
            $rightIndex++;
        }
    }
    
    $result[$arr_i] += FillResult($arr, $leftIndex, $rightIndex);
    
    $leftIndex++;
    
    $result[$arr_i] += $arr[$leftIndex][$centerIndex];
    
    $leftIndex++;
    
    $result[$arr_i] += FillResult($arr, $leftIndex, $rightIndex);
        
    $centerIndex++;
}

function FillResult($arr, $leftIndex, $rightIndex) {
    $result = 0;
    
    for ($i = 0; $i < 3; $i++) {
        $result += $arr[$leftIndex][$rightIndex];
        $rightIndex++;
    }
    
    return $result;
}

echo max($result);
