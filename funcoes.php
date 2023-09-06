<?php

$operador = '+';
$valor1 = 1000 ;
$valor2 = 20 ;

$resultado = calcular($operador, $valor1, $valor2);



function calcular($operador, $valor1, $valor2) {

    if ($operador == '+') {
        return soma($valor1, $valor2);
    }

    if ($operador == '-') {
        return subtracao($valor1, $valor2);
    }

    if ($operador == '*') {
        return multiplicacao($valor1, $valor2);
    }

    if ($operador == '/') {
        return divisao($valor1, $valor2);
    }


} 



function soma($valor1, $valor2) {
    return $valor1 + $valor2;
}

function subtracao($valor1, $valor2) {
    return $valor1 - $valor2;
}


function multiplicacao($valor1, $valor2) {
    return $valor1 * $valor2;
    
} 

function divisao($valor1, $valor2) {
    return $valor1 / $valor2;
    

} 

    function exibirResultado($resultado) {
        echo $resultado . "<br>";

    }


    $resultado = calcular($operador, $valor1, $valor2);

    exibirResultado($resultado);

