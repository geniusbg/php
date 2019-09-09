<?php

$input = explode(" -> ", readline());
$unsuccessfulLogin = 0;
$logins = [];

while ($input[0] != "end" && $input[0] != "login") {
    if (isset($logins[$input[0]])) {
        $logins[$input[0]] = $input[1];
    }
    $logins += array($input[0] => $input[1]);
    $input = explode(" -> ", readline());
}

if ($input[0] == "login") {
    $input = explode(" -> ", readline());
}
while ($input[0] != "end") {
    if (array_key_exists($input[0], $logins) && $logins[$input[0]] == $input[1]) {
        echo $input[0] . ": logged in successfully"  . PHP_EOL;
    } else {
        $unsuccessfulLogin++;
        echo $input[0] . ": login failed"  . PHP_EOL;
    }
    $input = explode(" -> ", readline());
}

echo "unsuccessful login attempts: " . $unsuccessfulLogin;
