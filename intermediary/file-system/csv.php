<?php 

#Comma Separated Valules

$file = fopen("dados.csv",'r');
while(!feof($file)) {
    $line = fgetcsv($file);
    print_r($line);
}
fclose($file);

$dados = [
    ['Joao', 'Advogado', 33],
    ['Ana', 'Juiza', 33],
    ['Maria', 'Professora', 33],
    ['Carlos', 'Professor', 33],    
];

$file = fopen("output.csv", 'w');
foreach($dados as $linha)
{
    fputcsv($file, $linha);
}
fclose($file);


# File()
$paises = file(dirname(__FILE__)."/paises.txt", FILE_SKIP_EMPTY_LINES);
print_r($paises);

