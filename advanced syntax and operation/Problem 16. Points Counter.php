<?php

$prohibited = array("@", "%", "&", "$", "*");

$input = explode("|", str_replace($prohibited, "", readline()));
// $input = explode("|", str_replace($prohibited, "", "L%@A|Odom|67"));

$result = [];
$teamScore = array();
$teamInfo = array();

while ($input[0] != "Result") {
    $temp = [];
    if (ctype_upper($input[0])) {
        $player = $input[1];
        $club = $input[0];
        $temp[$input[0]][$input[1]] = intval($input[2]);
    } else {
        $player = $input[0];
        $club = $input[1];
        $temp[$input[1]][$input[0]] = intval($input[2]);
    }
    if (!isset($teamInfo[$club][$player]) || $temp[$club][$player] > $teamInfo[$club][$player]) {
        $teamInfo[$club][$player] = $input[2];
    }

    $input = explode("|", str_replace($prohibited, "", readline()));
}

// $input = explode("|", str_replace($prohibited, "", "L%@A|Odom|3"));
foreach ($teamInfo as $key => $value) {
    // arsort($value);
    if (!array_key_exists($key, $teamScore)) {
        $teamScore[$key] = 0;
    }
    foreach ($value as $k => $v) {
        $teamScore[$key] += $v;
    }
}
arsort($teamScore);
foreach ($teamScore as $key => $value) {
    echo $key . " => " . $value . PHP_EOL;
    echo "Most points scored by " . key($teamInfo[$key]) . PHP_EOL;
}
