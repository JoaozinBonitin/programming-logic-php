<?php
$nameSeller = 'JOAO';
$fixedSallary = 500;
$totalSales = 1230.30;
$commission = $totalSales * 0.15;

$total = $fixedSallary + $commission;

echo "TOTAL = " . number_format($total, 2);