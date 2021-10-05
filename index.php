<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
   
   echo "Inicio da aplicação <br>";
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
       echo "O resultado de $a + $b = " . ($a + $b) . "<br>";
   }
   
   function minha_funcao(...$argumentos)  {
       foreach($argumentos as $a) {
           echo "$a <br>";
       }
   }


   sum(10);
   sum(10,2);
   sum(a: 10, b: 23);
   minha_funcao(1,2,3,4,5,6,7); #Variadic parameter

?>
</body>
</html>
