<?php
$totalMoney = 576;

$ballots100 = intval($totalMoney/100);
$rest100 = $totalMoney%100;
$ballots50 = intval($rest100/50);
$rest50 = $rest100%50;
$ballots20 = intval($rest50/20);
$rest20 = $rest50%20;
$ballots10 = intval($rest20/10);
$rest10 = $rest20%10;
$ballots5 = intval($rest10/5);
$rest5 = $rest10%5;
$ballots2 = intval($rest5/2);
$rest2 = $rest5%2;
$ballots1 = intval($rest2/1);

echo $ballots100 . " nota(s) de R$ 100,00" . PHP_EOL;
echo $ballots50 . " nota(s) de R$ 50,00" . PHP_EOL;
echo $ballots20 . " nota(s) de R$ 20,00" . PHP_EOL;
echo $ballots10 . " nota(s) de R$ 10,00" . PHP_EOL;
echo $ballots5 . " nota(s) de R$ 5,00" . PHP_EOL;
echo $ballots2 . " nota(s) de R$ 2,00" . PHP_EOL;
echo $ballots1 . " nota(s) de R$ 1,00" . PHP_EOL;
