<?php

/*
    NUMBER_FORMAT
    Apresenta um número formatado de várias formas

    PARAMETROS:
    $num            - o valor que pretendemos formatar.
    $decimals       - o numero de casas decimais.
    $dec_point      - caracter de sepação da parte decimal
    $thousands_sep  - caracter de sepação da parte milhares
*/


$valor = 100;
echo number_format($valor);
echo "\n";
echo number_format($valor,2, ".");
echo "\n";
$valor = 100.45;
echo number_format($valor,3,",");
echo "\n";
echo number_format($valor,1,",");
echo "\n";
$valor = 123456.700;
echo number_format($valor,2,",",".");
echo "\n";