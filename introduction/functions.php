<?php
 echo "Inicio da aplicação \n";
 whenStart();
 
 function whenStart()
 {
     echo ' A função foi executada...';
 }
 /* Funcoes em PHP são 
 case insentive (não diferencia Maiuscula de minuscula)
 function whenStart()
 {
     echo ' A função foi executada...';
 }
  */
 
 function Sum($a, $b = 1) 
 {
     $result =  ($a + $b);
     echo "O resultado de $a + $b = " . $result . "\n";
     return $result;
     
 }
 
 function VariadicParameter(...$argumentos)  {
     foreach($argumentos as $a) {
         echo "$a \n";
     }
 }

 sum(10);
 sum(10,2);
 $soma = sum(a: 10, b: 23);
 echo "O resultado da soma é $soma";
 $funcaoSemRetorno = VariadicParameter(1,2,3,4,5,6,7); #Variadic parameter
 echo "Funcao sem retorno $funcaoSemRetorno";

#ESCOPO
#Variaveis criadas dentro de condiçoes e loops não são destruidas
if(true) 
{ 
     $a = 10;
}
echo "\n $a \n";

$valorx = 10;

function TryAcessGlobal() {
    // global $valorx;
    //echo $valorx; descomente
}
