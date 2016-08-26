<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$arr =[];
while($f = fgets($_fp)){
    $arr[] = $f;
}
$count = array_shift($arr);

for ($i = 0; $i<$count; $i++) {
    $string = str_split($arr[$i]);
    $even = $odd = '';

    foreach ($string as $key => $str) {
        if (empty(trim($str))) {
            continue;
        }
        if ($key == 0 || $key % 2 == 0) {
            $even .= $str;
        } else {
            $odd .= $str;
        }
    }
    
    echo $even . " " . $odd . "\n";
}
?>
