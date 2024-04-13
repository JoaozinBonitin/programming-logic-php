<?php
$product = [
    'type' => ['physical', 'digital'],
    'language' => ['pt-br', 'en', 'es', 'zh-hans'],
    'status' => ['blocked', 'in_review', 'published']
];

$combinar = array();
foreach ($product as $k => $v) {
    $combinar[] = $v;
}

function combinacao($str, $termos, $i)
{
    $texto = '';
    if ($i >= count($termos)) {
        $texto .= rtrim($str, ' | ') . "\n"; // Remover o último ' | '
    } else {
        foreach ($termos[$i] as $termo) {
            $texto .= combinacao($str . $termo . ' | ', $termos, $i + 1);
        }
    }
    return $texto;
}

$statistics = [];
for ($day = 1; $day <= 31; $day++) {
    // Gerar uma nova combinação para cada dia
    $texto = combinacao('', $combinar, 0);
    // Explode a string em um array de combinações
    $combinations = explode("\n", rtrim($texto));
    // Armazenar as combinações para o dia atual
    foreach ($combinations as $combination) {
        // Separar as combinações em type, language e status
        list($type, $language, $status) = explode(' | ', $combination);
        // Adicionar as combinações ao array para o dia atual
        $statistics[$day][] = ['type' => $type, 'language' => $language, 'status' =>$status];
    }
}

echo json_encode($statistics);


