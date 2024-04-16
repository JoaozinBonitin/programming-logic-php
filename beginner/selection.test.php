<?php
$a = 5;
$b = 6;
$c = 7;
$d = 8;

if($b > $c && $d > $a && $c + $d > $a + $b && $a % 2 == 0 && $c > 0 && $d > 0){
    echo "valores aceitos";
} else {
    echo "valores nao aceitos"; 
}