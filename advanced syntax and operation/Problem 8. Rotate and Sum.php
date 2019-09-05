<?php

$n = explode(" ", (readline()));
$k = intval(readline());

// $n = explode(" ", "3 2 4 -1");
// $k = 2;
$sumArray = array_fill(0,count($n),0);
$tempArray = $n;

for ($i=0; $i < $k; $i++) {
    $temp = array_pop($tempArray);
    array_unshift($tempArray, $temp);
    for ($l=0; $l < count($n); $l++) {
        $sumArray[$l] = $sumArray[$l] + $tempArray[$l];
     }
    
}
echo implode(" ", $sumArray);