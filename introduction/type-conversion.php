<?php

    # TYPE CONVERSIONS

    $myboolean = false;
    echo $myboolean;
    echo (int)$myboolean . "\n";


    $names = ['Gabriel', 'João', 'José'];

    $newnames = (object)$names;
    print_r($newnames);

    $arraynames = (array)"Joao";
    print_r($arraynames);


    # NULL COALESCING OPERATOR
    $x = null;
    $y = $x ?? "Sem Valor"; 

    echo "\n" . $y;

    $x = null;
    // $x = "Valor ja definido";
    $x ??= "Novo valor";

    echo "\n" . $x;

    # VERIFICAÇÃO DE TIPO

    if(is_array($arraynames))
        echo "\n arraynames é um array";
    if(is_bool($myboolean))
        echo "\n myboolean é um bool";

    /*
     is_float() ou is_double()
     is_real()
     is_in() ou is_integer()
     is_null()
     is_numeric()
     is_obejct()
     is_string()
     is_callable()
    */