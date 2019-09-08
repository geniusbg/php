<?php

$input = explode(" : ", readline());
$phonebook = [];

while ($input[0] != "Over") {
    if (is_numeric($input[0])) {
        $phonebook += array($input[1] => $input[0]);
    } else {
        $phonebook += array($input[0] => $input[1]);
    }
    $input = explode(" : ", readline());
}

ksort($phonebook);
foreach ($phonebook as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}