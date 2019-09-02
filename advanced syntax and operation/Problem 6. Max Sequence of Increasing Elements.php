<?php

$input = explode(" ", readline());
$maxCount = 0;
$output = [];

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    $currentOutput = [];
    $currentOutput[] = $input[$row];
    for ($col = $row; $col < count($input) - 1; $col++) {
        if ($input[$col] < $input[$col + 1]) {
            $currentCount++;
            $currentOutput[] = $input[$col+1];
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $output = $currentOutput;
            }
        } else break;
    }
}
echo implode(" ", $output);
