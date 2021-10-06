<?php

# CONSTANTES MÁGICAS (porque variam automaticamente)


echo  "\n" , __LINE__;  # indica o número da linha
echo  "\n" , __FILE__; # indica o caminho completo
echo  "\n" , __DIR__ ; # indica a pasta onde esta o script


class MyClass
{
    function Func()
    {
        echo __CLASS__ .  "\n"; # indica o nome da classe
        echo __METHOD__ .  "\n"; # indica o nome da metodo
        echo __FUNCTION__ . "\n"; # indica o nome da funcao
    }
}

echo "\n\n";
$myclass = new MyClass();
$myclass->Func();

echo "\n" . __NAMESPACE__; # indica o namespace