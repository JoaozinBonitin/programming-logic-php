<?php
$a = 7.0; 
$b = 7.0;
$c =  7.0;

$sidesTriangle = [$a, $b, $c];

foreach($sidesTriangle as $index => $side){
    for($i = $index + 1; $i < count($sidesTriangle); $i ++){
        if($side < $sidesTriangle[$i]){
            $aux = $sidesTriangle[$i];
            $sidesTriangle[$i] = $side;
            $side = $aux;
        }
    }
}

if($a >= $b + $c){
    echo "NAO FORMA TRIANGULO " . PHP_EOL;
} if (($a**2) == ($b**2) + ($c**2)) {
    echo "TRIANGULO RETANGULO " . PHP_EOL;
} if (($a**2) > ($b**2) + ($c**2)){
    echo "TRIANGULO OBTUSANGULO" . PHP_EOL;
} if( ($a**2) < ($b**2) + ($c**2)){
    echo "TRIANGULO ACUTANGULO" . PHP_EOL;
} if( $a == $b && $a == $c){
    echo "TRIANGULO ISOSCELES" . PHP_EOL;
} if (($a == $b && $a != $c) || $a == $c && $a != $b || $b == $c && $b != $a) {
    echo "TRIANGULO RETANGULO" . PHP_EOL;
}