<?php

# IF
$nome = 'joao';

if($nome == 'joao') {
    echo 'Nome é joão';
}

# IF ... ELSE
$idade = 18;
if($idade <= 18) {
    echo 'Adolescente';
} else  {
    echo 'Adulto';
}

#IF ... ELSEIF ... ELSE

$media = 5;
if($media < 5) {
    echo "Reprovado";
} elseif($media <= 6)  {
    echo "Recuperação";
} else {
    echo "Aprovado";
}

die();

$numero = 20;
if($numero > 10 && $numero != 10) {
    // verdadeiro
} else {
    //false
}

#SWITCH
$case = 3;

switch($case) {
    case 1:
        echo "Voce escolheu o 1";
        break;
    case 2:
        echo "Voce escolheu o 2";
        break;
    case 3:
        echo "Voce escolheu o 3";
        break;
    default:
        echo "Voce não  escolheu nenhuma das opções";
        break;
}
#switch (==) avalia valor e match avalia valor e tipo (===)

#MATCH PHP8.0

echo match($case)
{
    1 => "Voce escolheu o 1",
    2 => "Voce escolheu o 2",
    3 => "Voce escolheu o 3",
    default => "Voce não  escolheu nenhuma das opções"
};
# No Match apenas um expressão é valida por condição;

#Ternario

$opcao = 0;

$nome = $opcao == 1? 'joao' : 'antonio';


/*<?php if(true): ?>
    <h2>SIM</h2>
<?php else: ?>
    <h2>NÃO</h2>
<?php endif;?>
*/


