<?php

// + - * /


$value1 = "1000";
$value2 = "10";
$operation = "/";

$result = 0;


if ($operation == "+") {

    $result = $value1 + $value2; // 20 = 10 + 10
}

if ($operation == "*") {

    $result = $value1 * $value2; // 100 = 10 * 10
}

if ($operation == "-") {

    $result = $value1 - $value2; // 0 = 10 - 10
}

if ($operation == "/") {

    $result = $value1 / $value2; // 1 = 10 / 10
}

echo $result; // 20



