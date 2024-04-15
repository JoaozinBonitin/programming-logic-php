<?php
$a = 3.0;
$b = 4.0;
$c = 5.2;
$pi = 3.14159;
$AreaTriangulo = ($a * $c)/2;
$AreaCirculo = ($pi * ($c**2));
$AreaTrapezio = ((($a+$b)*$c)/2);
$AreaQuadrado = $b**2;
$AreaRetangulo = ($a*$b);

echo "TRIANGULO: " . number_format($AreaTriangulo, 3) . PHP_EOL;
echo "CIRCULO: " . number_format($AreaCirculo, 3) . PHP_EOL;
echo "TRAPEZIO: " . number_format($AreaTrapezio, 3) . PHP_EOL;
echo "QUADRADO: " . number_format($AreaQuadrado, 3) . PHP_EOL;
echo "RETANGULO: " . number_format($AreaRetangulo, 3) . PHP_EOL;