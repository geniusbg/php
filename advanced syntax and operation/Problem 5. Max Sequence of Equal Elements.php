<?php

$input = explode(" ", readline());
$output = [];
$maxCount = 0;

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    for ($col = $row; $col <= count($input) - 1; $col++) {
        if ($input[$row] == $input[$col]) {
            $currentCount++;
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $output = array_fill(0, $maxCount, $input[$row]);
            }
        } else {
            break;
        }
    }
}
echo implode(" ", $output);
