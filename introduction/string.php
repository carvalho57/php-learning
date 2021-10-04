<?php

$a = "Gabriel" . " " . "Feo";
echo $a;


$nome = 'Gabriel';
$sobreNome = 'Feo';
$ultimoNome = 'Carvalho';

$nomeCompleto = "$nome $sobreNome de $ultimoNome";
echo $nomeCompleto;

#Caracter de escape 

$frase = "I'm not sure John \"The greate\" will win this figth.";
$frase = 'I\'m not sure John "The greate" will win this figth.';


#Unicode
echo "\u{A9}";

# HTML Entities
echo "&copy";