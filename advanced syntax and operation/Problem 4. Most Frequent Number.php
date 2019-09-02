<?php
$input = explode(" ", readline());

$maxCount = 0;
$number = "";
for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;

    for ($col = $row; $col < count($input); $col++) {
        if ($input[$row] == $input[$col]) {
            $currentCount++;
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $number = $input[$row];
            }
        }
    }
}
echo $number;