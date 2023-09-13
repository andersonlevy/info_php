<?php

/*se não for divisível por 4, não é bissexto
se for divisível por 4:
se for divisível por 100, só é bissexto se também for divisível por 400
se não for divisível por 100, é bissexto. 

Os anos terminados em 00 serão bissextos se a divisão deles por 400 for exata, isto é, o resto da divisão precisa ser igual a zero. 
*/



    //$year = date('Y');
    $year = "2023";

    if (($year % 4 == 0) && ($year % 100 != 0 || $year % 400 == 0)) {
        echo "$year é Bissexto";
    } else {
        echo "$year Não é Bissexto";
}





    
    $dataStr = "29/05/1990";
    $data  = explode("/", $dataStr);
    $dia = $data[0];
    $mes = $data[1];
    $ano = $data[2];
    

        if($dia < 1 || $dia > 31){
            $dia = 1;

        }


        if($mes < 1 || $mes > 12){
            $mes = 1;

        }


        $meses30dias = [4, 6, 9, 11];
        $meses31dias = [1, 3, 5, 7, 8, 10, 12];


        if (in_array($mes, $meses30dias) && $dia > 30) {
            $dia = 1;
            $mes += 1;
        }

        if ($mes == 2 && $dia >= 28) {
            $dia = 28;

            if (isBissexto($ano)) {
                $dia = 29;
            }
        }

function isBissexto($ano) {
    if (($ano % 4 == 0) && ($ano % 100 != 0) && ($ano % 400 == 0)){
        return true;
    } else {
        return false;
    }
}


      
        





    /*$diaDoAno = " ";
    $totalDiasNoAno = date('z'); //total dias no ano
    $dataAtual = date ('d/m/Y'); //dia, mês, ano
    $diasRestantes = 0;

    echo $totalDiasNoAno;
    */