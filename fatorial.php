<?php

/* Calcular o fatorial de um numero qualquer 
    Ex: $numero = 5.
    (5!) => 5 *4 *3 *2 *1 = 120;
    Dica: Utilizar laço de repetição.
*/

// $arrayFatorial = [5, 4, 3, 2, 1];

$numero = 5;
$soma = 1;

while($numero > 1) {
    $soma *= $numero;
    $numero--;
}

echo "o fatorial  é : {$soma}";


