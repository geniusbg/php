<?php

$input = explode(" ", readline());

// $input = explode(" ", "2 10 3");
$condensed = [];
$inputLen = count($input);

while (count($input) > 1){
    
    for ($i=0; $i < count($input) -1; $i++) { 
        array_push($condensed, $input[$i] + $input[$i+1]);
    }
    $input = $condensed;
    $condensed = [];
}

echo implode(" ", $input);