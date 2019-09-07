<?php

// $matrixSize = array_map("intval", explode(" ", "5, 6"));
$matrixSize = array_map("intval", explode(" ", readline()));

$rowSize = $matrixSize[0];
$colSize = $matrixSize[1];
$matrix = [];
$maxMatrix = [];

$maxSum = -INF;

// $matrix = [[1, 2, 4, 8, 9, 6], [2, 4, 1, 3, 4, 2], [2, 7, 9, 9, 9, 7], [8, 6, 9, 9, 9, 6], [9, 5, 9, 9, 9, 9]];


for ($row = 0; $row < $rowSize; $row++) {
    $matrix[$row] = array_map("intval", explode(" ", readline()));
}

for ($row = 0; $row < count($matrix); $row++) {
    for ($col = 0; $col < count($matrix[$row]); $col++) {
        $currentSum = 0;
        if (isset($matrix[$row + 2]) && isset($matrix[$row][$col + 2])) {
            $tempMatrix = [];
            for ($i = $row; $i <= $row + 2; $i++) {
                for ($k = $col; $k <= $col + 2; $k++) {
                    $currentSum += $matrix[$i][$k];
                    $tempMatrix[$i][$k] = $matrix[$i][$k];
                }
            }
            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
                $maxMatrix = $tempMatrix;
            }
        }
    }
}
echo "Sum = " . $maxSum . PHP_EOL;
foreach ($maxMatrix as $key => $value) {
    echo implode(" ", $value) . PHP_EOL;
}
