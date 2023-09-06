<?php

/*se não for divisível por 4, não é bissexto
se for divisível por 4:
se for divisível por 100, só é bissexto se também for divisível por 400
se não for divisível por 100, é bissexto
*/



$year = date('Y');
if (($year % 4 == 0) && ($year % 100 != 0 || $year %400 == 0)) {
    echo "$year é bissexto";
} else {
    echo "$year não é bissexto";
}