<?php
$x1 = 1.0;
$y1 = 7.0;
$x2 = 5.0;
$y2 = 9.0;

$distance = sqrt((($x2 - $x1)**2) + (($y2 - $y1)**2));

echo number_format($distance, 4);