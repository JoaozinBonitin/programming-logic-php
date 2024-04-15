<?php

$functionaryNumber = 25;
$numberHours = 100;
$valuePerHour = 5.50;

$salary = ($numberHours * $valuePerHour);

echo "NUMBER = " . $functionaryNumber . PHP_EOL;
echo "SALARY = U$ " . number_format($salary, 2);
