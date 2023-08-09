<?php

// + - * ^ % / pot numPar index


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

// echo $result; // 20

    for ($c = 0; $c < 10; $c++) {

        //echo "For: o valor de C é {$c}<br>";
    }


    
    $c = 0;
    
    while ($c < 10) {

       //echo "While:o valor de C é {$c}<br>";
        $c++;
    }



    $num = 10;

    for ($i = 0; $i <= 10; $i++) {
        $resultado = ($num * $i);
       // echo "{$num} * {$i} = ". $resultado ."<br>" ;
    }



    $media = 6;


    $prova = 4.8;
    $peso = 5;

    $prova2 = 1.5;
    $peso2 = 3;

    $prova3 = 2;
    $peso3 = 2;

    $numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);

    $denominador = ($peso + $peso2 + $peso3);

    $MP = $numerador / $denominador;

    if ($MP >= $media) {
        echo "Aluno Aprovado com a média {$MP}";
    } else {
        echo "Aluno Reprovado com a média {$MP}";
    }








