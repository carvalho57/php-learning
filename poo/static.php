<?php


class Test {
    static $nome;
    static function Testing()
    {
        echo "Testing " . self::$nome;
    }
}


Test::$nome = "Gabriel";
Test::Testing();
class Operacoes 
{
    #Função generica compartilhada entre as classes
    static function numeroAleatorio($min, $max) 
    {
        return rand($min,$max);
    }
}


echo "\n Gerando Numero Aleatorio " . Operacoes::numeroAleatorio(10,300);