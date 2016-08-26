<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

//    If is odd, print Weird
//    If is even and in the inclusive range of to , print Not Weird
//    If is even and in the inclusive range of to , print Weird
//    If is even and greater than , print Not Weird

$string = 'Weird';
if ($N % 2 == 0) {
    $string = 'Not Weird';
    if ($N >= 6 && $N <= 20) {
        $string = 'Weird';
    }
}

echo $string;
?>
