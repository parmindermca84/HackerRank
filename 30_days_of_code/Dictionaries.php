<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$arr = [];
while ($line = fgets($_fp)) {
    $arr[] = trim($line);
}
$count = array_shift($arr);
$directories = array_chunk($arr, $count);

$phones = [];
foreach ($directories[0] as $directory) {
    list($name, $phone) = explode(" ", $directory);
    $phones[trim($name)] = trim($phone);
}

foreach ($directories[1] as $name) {
    $name = trim($name);
    echo (array_key_exists($name, $phones) ? $name . '=' . $phones[$name] : 'Not found') . "\n";
}
