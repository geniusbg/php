<?php
$numbers = explode(" ", readline());

$command = $numbers[0];
$phonebook = [];

while ($command != "END") {
    if ($command == "A") {
        if (array_key_exists($numbers[1], $phonebook)) {
            $phonebook[$numbers[1]] = $numbers[2];
        }
        $phonebook += array($numbers[1] => $numbers[2]);
    } else if ($command == "S") {
        if (array_key_exists($numbers[1], $phonebook)) {
            foreach ($phonebook as $key => $value) {
                if ($key == $numbers[1]) {
                    echo $key . " -> " . $value . PHP_EOL;
                }
            }
        } else {
            echo "Contact " . $numbers[1] . " does not exist." . PHP_EOL;
        }
    } else if ($command == "ListAll") {
        ksort($phonebook);
        foreach ($phonebook as $key => $value){
            echo $key . " -> " . $value . PHP_EOL;
        }
    }

    $numbers = explode(" ", readline());
    $command = $numbers[0];
}
