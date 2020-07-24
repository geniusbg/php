<?php

$input = explode(" -> ", readline());

$age = [];
$salary = [];
$position = [];

while ($input[0] != "filter base") {
    if (is_numeric($input[1]) && !strpos($input[1], ".")) {
        $age += array($input[0] => $input[1]);
    } else if (is_numeric($input[1]) && strpos($input[1], ".")) {
        $salary += array($input[0] => $input[1]);
    } else if (is_string($input[1])) {
        $position += array($input[0] => $input[1]);
    }
    $input = explode(" -> ", readline());
}
$input = explode(" -> ", readline());
if ($input[0] == "Position") {
    foreach ($position as $name => $pos) {
        echo "Name: " . $name . PHP_EOL;
        echo "Position: " . $pos . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
} else if ($input[0] == "Salary") {
    foreach ($salary as $name => $sal) {
        echo "Name: " . $name . PHP_EOL;
        echo "Salary: " . number_format($sal, 2, ".","") . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
} else if ($input[0] == "Age") {
    foreach ($age as $name => $ag) {
        echo "Name: " . $name . PHP_EOL;
        echo "Age: " . $ag . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
}
