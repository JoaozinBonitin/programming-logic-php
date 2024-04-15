<?php
$partCode1 = 12;
$numberPart1 = 1;
$pricePart1 = 5.30;
$partCode2 = 12;
$numberPart2 = 2;
$pricePart2 = 5.10;

$amountToPay = ($numberPart1*$pricePart1) + ($numberPart2 * $pricePart2);

echo "VALOR A PAGAR: R$ " . number_format($amountToPay, 2);