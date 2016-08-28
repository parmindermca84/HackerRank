<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$max = [];
$index = $total = 0;

while ($n != 0) {
    // Calculate the remainder to make decimal to binary
    $result = $n % 2;  

    // Store the result into array
    $max[$index] += $result;
    
    // Update number
    $n = intval($n / 2);    
    
    // Update index value 
    // If result is not 1 then it means its a consecutive 1 
    // Otherwise update the index
    $index = ($result == 0) ? $index + 1 : $index;    
}

// Now we have array of maximum 1s
echo max($max);
