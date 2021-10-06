<?php

    # CONSTANTS
    # Variaveis que não vareiam
    # Nomes da constante sempre em MAISCULO

    #Const - (Usado dentro das classes)

    class Circulo 
    {
        const PI = 3.1415;
    }

    echo "Valor de PI: " . Circulo::PI;

    $circulo = new Circulo();
    echo "\n " . $circulo::PI;

    #CONSTANTS
    # O termo const não deve ser aplicado a variáveis locais ou parâmetros

    const PI = 3.1415;

    echo "O valor de pi" . PI;

    #Define 
    define('APP_NAME', 'MyApp');

    echo "\n App name " . APP_NAME;
    
    #verificar se ja existe
    if(defined('APP_NAME'))
        echo "Esta constant APP_NAME ja esta definida";

    #defined('CONSTANTE') or define('CONSTANTE', valor);