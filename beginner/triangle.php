<?php
$a = 6.0;
$b = 4.0;
$c = 2.0;

if($a < $b + $c && $b < $a + $c && $c < $a + $b){
    $perimetro = $a + $b + $c;
    echo "Perimetro = " . number_format($perimetro, 1);
} else {
    $areaTrapezio = (($a+$b)*$c)/2;
    echo "Area = " . number_format($areaTrapezio, 1);
}