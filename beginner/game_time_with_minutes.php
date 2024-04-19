<?php
$initHour = 7;
$initMinute = 7;
$finalHour = 7;
$minuteFinal = 7;

if($initHour > $finalHour && $initMinute > $minuteFinal){
    $totalGameHour  = 24 - ($initHour - $finalHour);
    $totalGameMinute = 60 - ($initMinute - $minuteFinal);

    echo "O JOGO DUROU  " . $totalGameHour . " HORA(S) E " . $totalGameMinute . " MINUTO(S)" . PHP_EOL;
} elseif($initHour < $finalHour && $initMinute < $minuteFinal) {
    $totalGameHour = $finalHour - $initHour;
    $totalGameMinute = $minuteFinal - $initMinute;

    echo "O JOGO DUROU  " . $totalGameHour . " HORA(S) E " . $totalGameMinute . " MINUTO(S)" . PHP_EOL;
} elseif($initHour == $finalHour && $initMinute == $minuteFinal){
    $totalGameHour  = 24 - ($initHour - $finalHour);
    $totalGameMinute = 0;

    echo "O JOGO DUROU  " . $totalGameHour . " HORA(S) E " . $totalGameMinute . " MINUTO(S)" . PHP_EOL;
} else {
    $totalGameHour = 0;
    $totalGameMinute = 60 - ($initMinute - $minuteFinal);

    echo "O JOGO DUROU  " . $totalGameHour . " HORA(S) E " . $totalGameMinute . " MINUTO(S)" . PHP_EOL;
}