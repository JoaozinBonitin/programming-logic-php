<?php
$initTime = 2;
$finalTime = 16;

if($initTime >= $finalTime){
    $totalGame = 24 - ($initTime - $finalTime);
    echo "O JOGO DUROU " . $totalGame . " HORAS" . PHP_EOL;
} else {
    $totalGame = $finalTime - $initTime;
    echo "O JOGO DUROU " . $totalGame . " HORAS" . PHP_EOL;
}