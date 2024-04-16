<?php
$days = 800;

$years = intval($days/365);
$restMonths = $days%365;
$months = intval($restMonths/30);
$days = $restMonths%30;

echo $years . " ano(s)" . PHP_EOL;
echo $months . " mes(es)" . PHP_EOL;
echo $days . " dia(s)" . PHP_EOL; 