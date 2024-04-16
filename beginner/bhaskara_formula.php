<?php
$a = 10.3;
$b = 203.0;
$c = 5.0;

$delta = sqrt($b**2 - 4 * $a * $c); 

if($delta >= 0 && $a > 0){
    $x1 = (-$b + $delta) / (2 * $a);
    $x2 = (-$b - $delta) / (2 * $a);

    echo "R1 = " . number_format($x1, 4) . PHP_EOL;
    echo "R2 = " . number_format($x2, 4) . PHP_EOL; 
} else {
    echo "Impossivel calcular";
}