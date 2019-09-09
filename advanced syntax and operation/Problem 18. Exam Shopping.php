<?php

$input = explode(" ", readline());
$inventory = [];

while ($input[0] != "exam") {

    if ($input[0] == "stock") {
        if (isset($inventory[$input[1]])) {
            $inventory[$input[1]] += intval($input[2]);
        } else {
            $inventory += array($input[1] => intval($input[2]));
        }
    } else if ($input[0] == "buy") {
        if (isset($inventory[$input[1]]) && $inventory[$input[1]] > 0) {
            $inventory[$input[1]] -= intval($input[2]);
        } else if (isset($inventory[$input[1]]) && $inventory[$input[1]] < 1) {
            echo $input[1] . " out of stock" . PHP_EOL;
        } else {
            echo $input[1] . " doesn't exist" . PHP_EOL;
        }
    }

    $input = explode(" ", readline());
}

foreach ($inventory as $key => $value) {
    if ($inventory[$key] > 0) {
        echo $key . " -> " . $value . PHP_EOL;
    }
}
