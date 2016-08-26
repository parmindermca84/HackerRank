<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

for ($i=1; $i<=10; $i++) {
    echo $N . ' x ' . $i . ' = ' . $N * $i . "\n";
}
?>
