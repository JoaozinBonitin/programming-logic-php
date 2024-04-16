<?php
$n1 = 9.0;
$n2 = 4.0;
$n3 = 8.5;
$n4 = 9.0;

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 *1)) / 10;

if($media >= 7){
    echo "Media: " . number_format($media, 1) . PHP_EOL;
    echo "Aluno aprovado." . PHP_EOL;
} else if($media >= 5 && $media <= 6.9){
    echo "Media: " . number_format($media, 1) . PHP_EOL;
    echo "Aluno em exame." . PHP_EOL;
    $notaExame = 6.4;
    echo "Nota do exame: " . $notaExame . PHP_EOL;
    $novaMedia = ($media + $notaExame) / 2;
    if($novaMedia >= 5){
        echo "aluno aprovado" . PHP_EOL;
        echo "Media final: " . $novaMedia;
    } else {
        echo "aluno reprovado" . PHP_EOL;
        echo "Media final: " . $notaExame;
    }
} else {
    echo "Media: " . number_format($media, 1) . PHP_EOL;
    echo "Aluno reprovado" . PHP_EOL;
}
