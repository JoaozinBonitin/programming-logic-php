<?php
$lunch  = 3;
$quantity = 2;

switch($lunch){
    case 1: 
        $total = $quantity * 4;
        echo "Total: R$ " . number_format($total, 2);
        break;
    case 2:
        $total = $quantity * 4.50;
        echo "Total: R$ " . number_format($total, 2);
        break;
    case 3: 
        $total = $quantity * 5;
        echo "Total: R$ " . number_format($total, 2);
        break;
    case 4: 
        $total = $quantity * 2;
        echo "Total: R$ " . number_format($total, 2);
        break;
    case 5: 
        $total = $quantity * 1.50;
        echo "Total: R$ " . number_format($total, 2);
        break;
    default:
        echo "Produto nao encontrado!";
}