<?php
$x = 4.5;
$y = -2.2;

if($x >= 0 && $y >= 0){
    echo "Q1";
}else if($x <= 0 && $y >= 0){
    echo "Q2";
}else if($x <= 0 && $y <= 0){
    echo "Q3";
}else if ($x >= 0 && $y <= 0){
    echo "Q4";
} else if ($x == 0 && $y == 0){
    echo "Origem";
}