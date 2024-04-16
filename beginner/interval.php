<?php
$interval = 25.01;

if($interval >= 0 && $interval <= 25){
    echo "Intervalo [0, 25]";
} else if($interval > 25 && $interval <= 50){
    echo "Intervalo [25, 50]";
} else if($interval > 50 && $interval <= 75){
    echo "Intervalo [50, 75]";
} else if($interval > 75 && $interval <=100){
    echo "Intervalo [75, 100]";
} else {
    echo "Fora do intervalo";
}