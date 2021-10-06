<?php

    /*
        PRINTAR VALORES DAS VARIAVEIS

        print_r
        var_dump
        var_export
    */


    #print_r

    $value = "Valor";

    echo "print_r\n";
    print_r($value);
    echo "\n\n";

    echo "var_dump\n";
    var_dump($value); #mais detalhes
    echo "\n\n";

    echo "var_export\n";
    var_export($value); #escrita estilo php
    echo "\n\n";


    /*
    print_r
    Valor

    var_dump
    string(5) "Valor"

    var_export
    'Valor'
     */
