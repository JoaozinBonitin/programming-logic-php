<?php
$travelledDistance = 500;
$spentFuel = 35.0;

/*
500 ---> 35.0
 x  <--- 1.0

 35x = 500
 x = 500/35
*/

$totalSpentFuel = $travelledDistance/$spentFuel;

echo number_format($totalSpentFuel, 3) . " km/l";