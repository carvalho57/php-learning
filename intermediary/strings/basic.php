<?php

# TRIM - REMOVE ESPAÇOS|LETRAS DO INICIO E FIM DA STRING
$line = " Esta é um string com espaco no fim e inicio ";

$trim = trim($line);
$ltrim = ltrim($line);
$rtrim = rtrim($line);


# UPPER AND LOWER

echo strtoupper($line);
echo strtolower($line);
echo "\n\n";

$name = "João";

echo strtoupper($name);
echo mb_strtoupper($name);
echo "\n\n";
echo strtolower($name);
echo mb_strtolower($name);
echo "\n\n";
# Capitalize

$name = "joão carlos";
echo ucwords($name);
echo "\n\n";
# Length

echo strlen("Nome");

#quando um variavel é nula ou vazia = 0
#se for boolean true = 1 false = 0 
# php faz muita conversao implicita

#Problema com acentos use "mb"
echo strlen("João");
echo mb_strlen("João"); 


# REPEAT

echo str_repeat('-', 100);

echo str_pad(100, '30','.', STR_PAD_LEFT);
echo "\n";
echo str_pad(200, '30','.', STR_PAD_LEFT);
echo "\n";
echo str_pad(300, '30','.', STR_PAD_LEFT);
echo "\n";


# CONTAINS
#case sensitive
$frase = "Esta e uma frase"; 

echo str_contains($frase, "frase") ? "TRUE" : "FALSE";
echo str_contains($frase, "frases") ? "TRUE" : "FALSE";
echo "\n\n";

echo str_starts_with($frase, "E");
echo str_ends_with($frase, "E");

#SUBSTRING
# SE TIVER ACENTO TEM QUE USAR A VERSÃO MB, PQ SE NÃO
#VAI DAR A CONTAGEM ERRADO
#PQ CARACTERES ACENTUADOS CONTA COM 2
echo substr($frase, 5,5);

echo substr($frase,-3,2); #começa a contar do final
echo substr($frase,-3);


#EXPLODE E IMPLODE (join)


#Explode - slip que não aceita espacos

$str_nomes = "Ola,Mundo,Novo";
$nomes = explode(",", $str_nomes);

$nomes = ['Ola','Mundo','Novo'];
echo $str_nomes = implode(' ',$nomes);

print_r($nomes);

# REPLACE
#Suporta arrays
echo str_replace(' ', ' X ', $str_nomes);
#str_ireplace case insensitive

$frase = "Ola Mundo Novo";
print_r(str_split($frase));


# STRSTR
echo strstr($frase, Mu); #Mundo Novo
echo strstr($frase, Mu,true); #Ola

# STRPOS - permite encontrar a posição
echo $strpos($frase,"Mun");
echo $strpos($frase,"Mun",6);


#IMPORTANTE: caractes especiais use a função mb_strpos();

# Se não for encontrada temos um resultado false, aconselhado usar o === (tipo&valor)


# STRRPOS - procura a última ocorrencia de um string
$frase = "Esta frase serve para testes";
echo strpos($frase,"se"); #8
echo strrpos($frase,"se");#11


#STRIPOS E STRRIPOS (EQUIVALENTES CASE INSENSITIVE)
#MB_STRIPOS E MB_STRRIPOS (EQUIVALENTES MULTIBYTES (Ç))

