<?php

/* Calcular o fatorial de um numero qualquer 
    Ex: $numero = 5.
    (5!) => 5 *4 *3 *2 *1 = 120;
    Dica: Utilizar laço de repetição.
*/

$numero = 5;
// $arrayFatorial = [5, 4, 3, 2, 1];
$soma = 0;
$fat = 0;

while($numero > 1) {
    $fat *= $numero;
    $soma += $fat;
    $numero = $numero -1;
}

echo "o fatorial  é : {$soma}";


