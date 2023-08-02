<?php

// + - * ^ % / pot numPar


$value1 = "100"; // porcentagem
$value2 = "100"; // preço
$operation = "ma";

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


if ($operation == "perc"){

    $desconto = ($value1 * $value2) / 100; // 10
    $result = $value2 - $desconto;
}
    
if ($operation == "perc+"){

    $desconto = ($value1 * $value2) / 100; // 10
    $result = $value2 + $desconto;
}
    

if ($operation == "ma"){

    $result = ($value1 + $value2) / 10; // 10
    

}



    echo $result; // 20
