<?php

$list1 = [1, 2, 4];
$list2 = [1, 3, 4];
$output = [];

$output = $list1;

foreach($list2 as $element){
    $output[] = $element;
}

for($i = 0; $i < count($output); $i++){
    for($j = $i + 1; $j < count($output); $j++){
        if($output[$i] > $output[$j]){
            $aux = $output[$i];
            $output[$i] = $output[$j];
            $output[$j] = $aux;
        } 
    }
}

print_r($output);



