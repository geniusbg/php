<?php

$matrixSize = array_map("intval", explode(" ", readline()));
// $matrixSize = array_map("intval", explode(" ", "3 6"));


$rowSize = $matrixSize[0];
$colSize = $matrixSize[1];

$matrix = [];

for ($row=0; $row < $rowSize; $row++) { 
    $matrix[$row] = array_map("intval", explode(", ", readline()));
    // $matrix[$row] = array_map("intval", explode(", ", "7, 1, 3, 3, 2, 1
    // 1, 3, 9, 8, 5, 6
    // 4, 6, 7, 9, 1, 0") );

}
$sum = 0;

for ($row=0; $row < count($matrix); $row++) { 
    for ($col=0; $col < count($matrix[$row]); $col++) { 
        $sum += $matrix[$row][$col];
    }
}

echo $rowSize . PHP_EOL;
echo $colSize . PHP_EOL;
echo $sum;