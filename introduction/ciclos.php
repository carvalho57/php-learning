<?php

    # WHILE
    $x = 1;
    while ($x < 10) {
        echo 'valor de x = ' . $x;
        $x++;
    }

    
    # FOR
    for ($i=0; $i < 10; $i++) { 
        echo 'valor de x = ' . $i;
    }


    
    # WHILE
    $x = 0;
    do {
        echo 'valor de x = ' . $x . '<br>';
        $x++;
    } while($x < 10);


    $nomes = ['joao', 'jose', 'janice'];

    for ($i=0; $i < count($nomes); $i++) { 
        echo "$nomes[i] <br>";
    }

    #FOREACH

    foreach ($nomes as $nome) {
        echo $nome . '<br>';
    }

    $capitais = [
        'Portugal' => 'Lisboa',
        'Brasil' => 'Brasília',
        'Argentina' => 'Buenos Aires',
    ];

    foreach ($capitais as $pais => $capital) {
        echo "Para o país <b>$pais</b> a capital é $capital<br>";
    }