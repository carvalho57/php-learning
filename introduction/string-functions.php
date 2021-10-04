<?php

    $a = 'Gabriel';
    $b = 'Carvalho';

    $result = $a == $b;
    $result = $a != $b;

    #Funções nativas

    $frase = 'Esta frase tem 29 caracteres';

    #retorna o número de caracteres da string;
    $total = strlen($frase);

    #retorna um trecho da string;
    $result = substr($frase,0,4);

    #Maiuscula
    $result = strtoupper($frase);
    #Minuscula
    $result = strtolower($frase);

    #substitui uma letra por outra
    $nova_frase = str_replace('a', 'x', $frase);

    $posicao = strpos($frase, 'a'); #3;

    #strcontains, starwith, endswith
    #https://www.php.net/manual/en/ref.strings.php