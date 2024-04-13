<?php
$nums = [2,7,11,15];
$target = 9;
$output = [];

for($i = 0; $i < count($nums); $i++){
    for($j = $i + 1; $j < count($nums); $j++){
        if($target == $nums[$i] + $nums[$j]){
            $output = [$i, $j];
        }
    }
}

print_r($output);

?>