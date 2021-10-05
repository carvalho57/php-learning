<?php 

#Funcões anonimas
#Uteis para usar como argumentos de função
$soma = function($a, $b) 
{
    return $a + $b;
};
$sum  = $soma;

$calcular = function($operacao,$a,$b) 
{
    $result = $operacao($a,$b);
    echo "O resultado da soma é " . $result. "\n";
};


echo "The result of the sum is  " . $sum(10,20). "\n";
$calcular($soma,10,20);

# Funcoes Anonimas
# são funções anónimas que podem usar variáveis do escopo global

$x = 20;
$y = 30;

$closure = function($z) use($x,$y)
{
    echo "$z - $x - $y";
    $y += 12;
};

$closure(10);

# Arrow Functions
# funcções anónimas mais sucintas
#usam palavra reservada fn e não precisam de return
$arrow = fn($x) => $x + 1;

echo "\n" . $arrow(10);


# GENERATORS
/*
    Um gerador é uma funçã oque permite gerar séries de valores.
    cada valor é devolvido pela função através da instrução yield;
    ao contratio do return, a instrução yield guarda o estado da função    
*/

echo "\n Generators\n ";

function Iterator() {
    for($i = 0; $i < 10; $i++) {
        yield $i;
    }
}

foreach (Iterator() as $value) {
    echo "$value \n";
}

