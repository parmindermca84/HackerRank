<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$arr = [];
while (!feof($_fp)) {
    $arr[] = fgets($_fp);
}

$total = round($arr[0] + ($arr[0] * $arr[1]/100) + ($arr[0] * $arr[2]/100));
echo "The total meal cost is $total dollars."
?>
