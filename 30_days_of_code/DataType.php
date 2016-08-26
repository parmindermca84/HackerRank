<?php
$handle = fopen ("php://stdin","r");
$i = 4; 
$d = 4.0; 
$s = "HackerRank ";
// Declare second integer, double, and String variables.

// Read and save an integer, double, and String to your variables.
$arr = [];
while (!feof($handle)) {
    $arr[] = fgets($handle); 
}

// Print the sum of both integer variables on a new line.
echo intval($i + $arr[0]);
echo "\n";

// Print the sum of the double variables on a new line.
echo number_format((float) $arr[1] + (float) $d, 1) . "\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s . $arr[2];
fclose($handle);
?>
