<?php

// $test = explode(" ", readline());
$test = explode(" ", "a b c d e");
print_r($test);
$testLen = count($test);

for ($i=0; $i < $testLen / 2 ; $i++) { 
    $temp = $test[$i];
    $test[$i] = $test[$testLen -$i -1];
    $test[$testLen - $i - 1] = $temp;
}
$displayTest = implode(" ", $test);

echo $displayTest;