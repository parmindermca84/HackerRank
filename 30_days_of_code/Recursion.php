<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$number = fgets($_fp);

echo Factorial($number);

function Factorial($number) 
{
    if ($number <= 1) {
        return 1;
    }
    
    return $number * Factorial($number - 1);
}
