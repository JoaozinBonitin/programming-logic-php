<?php
$salary = 800.01;

if($salary >= 0 && $salary <= 400){
    $readjustment = $salary * 0.15;
    $newSalary = $salary + $readjustment;
    echo "Novo salario: " . number_format($newSalary, 2) . PHP_EOL;
    echo "Reajuste ganho: " . number_format($readjustment, 2) . PHP_EOL;
    echo "Em percentual: 15%" . PHP_EOL;
} elseif ($salary > 400 && $salary <= 800) {
    $readjustment = $salary * 0.12;
    $newSalary = $salary + $readjustment;
    echo "Novo salario: " . number_format($newSalary, 2) . PHP_EOL;
    echo "Reajuste ganho: " . number_format($readjustment, 2) . PHP_EOL;
    echo "Em percentual: 12%" . PHP_EOL;
} elseif ($salary > 800 && $salary <= 1200) {
    $readjustment = $salary * 0.1;
    $newSalary = $salary + $readjustment;
    echo "Novo salario: " . number_format($newSalary, 2 , '.', ' ') . PHP_EOL;
    echo "Reajuste ganho: " . sprintf("%.2f", $readjustment) . PHP_EOL;
    echo "Em percentual: 10%" . PHP_EOL;
} elseif ($salary > 1200 && $salary <= 2000) {
    $readjustment = $salary * 0.07;
    $newSalary = $salary + $readjustment;
    echo "Novo salario: " . number_format($newSalary, 2) . PHP_EOL;
    echo "Reajuste ganho: " . number_format($readjustment, 2) . PHP_EOL;
    echo "Em percentual: 7%" . PHP_EOL;
} elseif ($salary > 1200) {
    $readjustment = $salary * 0.04;
    $newSalary = $salary + $readjustment;
    echo "Novo salario: " . number_format($newSalary, 2) . PHP_EOL;
    echo "Reajuste ganho: " . number_format($readjustment, 2) . PHP_EOL;
    echo "Em percentual: 4%" . PHP_EOL;
}

