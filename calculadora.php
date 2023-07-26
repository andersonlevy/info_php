<?php

// + - * ^ % /


$value1 = "2";
$value2 = "1";
$operation = "^";

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

if ($operation == "/"){


    $result = $value1 / $value2; // 1 = 10 / 10
}
if ($operation == "^"){

    $result = $value1 ** $value2; //
}

    
if ($operation == "%")  {

    $result = $value1 % $value2; //
}  





echo $result; // 20
