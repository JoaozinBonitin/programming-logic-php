<?php
$timeSeconds = 556;

$minutes = intval($timeSeconds/60);
$seconds = $timeSeconds%60;
$hours = intval($minutes/60);
$realMinutes = $minutes % 60;

echo $hours . ":" . $realMinutes . ":" . $seconds;


