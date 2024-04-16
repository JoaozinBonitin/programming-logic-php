<?php
$a = 7;
$b = 21; 
$c = -14;

if($a > $b){
    $aux = $a;
    $a = $b;
    $b = $aux;
} 
if ($b > $c){
    $aux = $b;
    $b = $c; /* a = 7 && b = -14 && c = 21*/
    $c = $aux;
}
if ($a > $b){
    $aux = $a;
    $a = $b;
    $b = $aux;
} 

echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

