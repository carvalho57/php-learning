<?php


# Exemplos

$valores = array(1,2,3,4,5);
$nomees = array('joao', 'jose','janice');

# a partir do PHP 5.4
$valores = [1,2,3,4,5];
$nomes = ['joao', 'jose','janice'];


echo $valores[0];
echo $nomes[1];


$dados = [
    1 => 100,
    2 => 200,
    3 => 300
];

echo $dados[1];
$dados[] = 400; #$dados[4], adiciona um novo elemento no final


    # ARRAYS ASSOCIATIVOS (DICTIONARY)

$dados = [
    'A' => 1,
    'B' => 2,
    'C' => 3,
    'D' => 4
];

    # ARRAYS MULTIDIMENCIONAIS

$dados = [
    [10,20,30,40],
    [100,200,300,400],
    [1000,2000,3000,4000],
];

echo $dados[0][0];
echo $dados[2][3];