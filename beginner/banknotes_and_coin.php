<?php
$money = 576.73;

$bankNotes = [100, 50, 20, 10, 5, 2];
$coins = [1, 0.50, 0.25, 0.10, 0.05, 0.01];

echo "NOTAS: " . PHP_EOL;
foreach($bankNotes as $notes){
    $countValue = intval($money/$notes);
    $money = fmod($money, $notes);

    echo $countValue . " nota(s) de R$" . number_format($notes, 2) . PHP_EOL; 
}

echo "MOEDAS: " . PHP_EOL;

foreach($coins as $coin){
    $counCoins = intval($money/$coin);
    $money = fmod($money, $coin);

    echo $counCoins . " moeda(s) de R$ " . number_format($coin, 2) . PHP_EOL;
}
