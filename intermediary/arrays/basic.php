<?php

$nomes = ['Joao', 'Carlos', 'Amanda', 'Aline', 'Alanis'];

print_r($nomes);

# Key Value - Dictionary
$cliente = [
    'nome' => 'Carlos',
    'idade' => 34,
    'profissao' => 'Pedreiro'
];

print_r($cliente);
echo "\n " . $nomes[1];
echo "\n " . $cliente['nome'];


# Arrays Multidimensionais

$empresa = [
    'administracao' =>  [
        'Joao administrador',
        'Carlos sócio'
    ], 
    'contabilidade' => [
        'Mariana',
        'Joaquim'
    ],
    'armazen' => [
        'gestores' => [
            'carlos',
            'marco'
        ],
        'operadores' => [
            'fernando',
            'amanda',
            'daniel',
            'carol'
        ]
    ]
];

// print_r($empresa);
print_r($empresa['armazen']['operadores']);

# LIST
list($nome, $nome2) = $nomes;
echo "\n$nome   $nome2";

# EXTRACT - gera variaveis automaticamente mapeando para a key
extract($cliente);
echo "\n$idade";


$yesno = is_array($nomes) ? "SIM" : "NÃO"; #Is Array (verifica se é um array)
echo "\nÉ um array: $yesno";

$yesno = empty($nomes) ? "SIM" : "NÃO"; #Empty verifica se esta vazio (string,arrays em variaveis )
echo "\nÉ um array vazio: $yesno";

$yesno = is_countable($nomes) ? "SIM" : "NÃO"; #Is Countable
echo "\nÉ um contavel: $yesno";

$yesno = is_iterable($nomes) ? "SIM" : "NÃO"; #Is Iterable (é possivel usar em um ciclo)
echo "\nÉ iteravel?: $yesno";


#   FUNÇÕES DE INSERÇÃO E REMOÇÃO

echo "\n\n Funções array \n\n";
print_r($nomes);
// $nomes[] = 'Gabriel';

// array_push($nomes,'Gabriel', 'Guilherme'); #adiciona no final
// array_unshift($nomes, 'Gabriel', 'Guilherme'); # adiciona no inicio
// $valor =  array_shift($nomes); #retira elemento do inicio do Array
// echo "\nValor retirado $valor\n";
$valor = array_pop($nomes); #retira elemento do final do array
echo "\nValor retirado $valor\n";
print_r($nomes);

# KEY EXIST - IN ARRAY

$yesno = key_exists('administracao', $empresa) ? "SIM" : "NÃO";
echo "\nKey Existe: $yesno";
$yesno = in_array('Loucura ',$nomes) ? "SIM" : "NÃO";
echo "\nValor Existe no array nomes: $yesno";

# DUPLICIDADE
$duplicados = ['joao', 'joao', 'joao','jose'];
$semduplicados = array_unique($duplicados);
print_r($semduplicados);

#REORDENAR ALEATORIAMENTE
print_r($nomes);
shuffle($nomes);
print_r($nomes);

# FILTROS

echo "FILTROS\n\n";

echo "FILTER\n";
$valores = [1,2,3,4,5,6,7,8,9,10];
$impares = array_filter($valores, function($valor) # Aplica o filter aos valores
{            
    return $valor & 1; 
});
print_r($impares);

echo "MAP\n";
$map = array_map(function($valor){
    return $valor * 2;
},$valores);

print_r($map);


# PRIMEIRA E ULTIMA CHAVE

echo "First " .  array_key_first($valores);
echo "Last " .  array_key_last($valores); 