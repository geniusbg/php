<?php

$matrixSize = array_map("intval", explode(", ", readline()));
// $matrixSize = array_map("intval", explode(", ", "2, 4"));


$rowSize = $matrixSize[0];
$colSize = $matrixSize[1];
$matrix = [];
$maxSum = 0;
$maxMatrix = [];

// $matrix = [[10, 11, 12, 13],[14, 15, 16, 17]];

for ($row=0; $row < $rowSize; $row++) { 
    $matrix[$row] = array_map("intval", explode(", ", readline()));
}

for ($row=0; $row < count($matrix); $row++) {
    $currentSum = 0;
    for ($col=0; $col < count($matrix[$row]); $col++) { 
        if(isset($matrix[$row + 1]) && isset($matrix[$row][$col+1])){

            $currentSum = $matrix[$row][$col] + $matrix[$row][$col+1] + 
            $matrix[$row + 1][$col] + $matrix[$row+1][$col+1];
            if ($currentSum > $maxSum) {
                $maxMatrix = [[$matrix[$row][$col], $matrix[$row][$col+1]], 
                [$matrix[$row + 1][$col], $matrix[$row+1][$col+1]]];
                $maxSum = $currentSum;
        }
        }
    }
}

foreach ($maxMatrix as $key => $value) {
    echo implode(" ", $value) . PHP_EOL;
}
echo $maxSum;