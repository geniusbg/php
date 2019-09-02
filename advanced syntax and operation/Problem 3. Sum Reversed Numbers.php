<?php
$input = explode(" ", readline());

$sum = 0;
for ($i=0; $i < count($input); $i++) {
    $sum += strrev($input[$i]);
}
echo $sum;


//VARIANT 2

echo array_reduce(explode(" ", readline()), function($sum, $el){
    return $sum += intval(strrev($el));
});