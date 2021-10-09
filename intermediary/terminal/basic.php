<?php

/*
    PHP CLI SAPI
    CLI - Command Line Interface
    SAPI - Server Application Programmin Interface
*/

//echo $argv[0]; nome do script basic.php   
// echo $argv[1];
// echo $argv[2];

#ARGV = colecão com os parametros passados para o script
#ARGC = quantidade de parametros pas

$valor1 =  isset($argv[1])?(int)$argv[1]:0 ;
$valor2 =  isset($argv[2])?(int)$argv[2]:0 ;


echo $result =  "A soma de $valor1 + $valor2 = " . ($valor1 + $valor2);
echo "\n";

$file  = fopen(time().'.txt','w');
echo "Criando arquivo para armazenar o resultado";
fwrite($file,$result . PHP_EOL);
fclose($file);

