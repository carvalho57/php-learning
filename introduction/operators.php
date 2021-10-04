<?php

# operadores aritméticos
$result = 4 + 2; # + - * / % (mod) **(exp)

#operadores de atribuição combinados
$result += 14; # $result = $result + 14
$result -= 30; # += -= *= /=

#operadore de incremento
$x = 1;
$x++; #pos incremento
++$x; #pré incremento

echo $x;
#operadores comparativos

echo (2 == 3); #false
echo (2 != 3); #true
echo (2 >= 3); #false
echo (2 <= 3); #true

$a = (50 != '50'); #false
$a = (50 !== '50'); #true comparação (valor e tipo)

# <=> tie figther

$x = 1 <=> 1; # 0  (1 == 1)
$x = 3 <=> 2; # 1  (3 > 2)
$x = 1 <=> 2; # -1 (1 < 2

# operadores logicas

$x = (true) && (false); #false
$x = (true) || (false); #true

$x = !$x;  # ** || XOR
