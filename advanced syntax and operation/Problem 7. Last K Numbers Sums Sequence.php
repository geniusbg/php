<?php   

// $n = intval(readline());
// $k = intval(readline());
$n = 6;
$k = 3;

$numbers = array_fill(0, $n, 0);
$numbers[0] = 1;

for ($currentEl=0; $currentEl  < $n; $currentEl++) { 
    
    $startIdex = max(0, $numbers[$currentEl] - $k);
    $sum = 0;
    
    for ($i=$startIdex; $startIdex <= $currentEl; $i++) { 
        $sum += $numbers[$i];
    }
}


print_r($numbers);



