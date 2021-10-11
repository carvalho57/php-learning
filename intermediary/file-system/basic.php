<?php

# CRIANDO E NAVEGANDO ENTRE DIRETORIOS

mkdir("pasta1");
mkdir("pasta1/pasta2", 0777, true);
mkdir(__DIR__ . "/pasta1");
mkdir(dirname(__FILE__) . "/pasta1");
chdir(dirname(__FILE__) . "/pasta1");
touch("filename.txt");

# RW
chdir(dirname(__FILE__) . "/pasta1");
$file = fopen('filename.txt','w');
fwrite($file, "Ola mundo novo1\n");
fwrite($file, "Ola mundo novo2\n");
fclose($file);

/* 
    Modos
    w - write - Abre o ficheiro apenas para escrever
            Se o ficheiro não existe, cria. Se existe, apaga tudo.
    a - append - Se existe, acrescenta no final do arquivo
 */

 # Writing
$file = fopen("filename.txt",'a');
for($i = 0; $i < 10; $i++) {
    fwrite($file, "$i º Escrevendo mais uma linha" . PHP_EOL);
}
fclose($file);

# Reading

$file = fopen("filename.txt",'r');
while(!feof($file)) #file endof file
{
    echo fgets($file);
}
fclose($file);

# R/W a text 

#Write
$text = "Sit nulla id minim dolor quis. Eiusmod consectetur ullamco minim aliqua. In id ullamco aliquip voluptate qui fugiat nostrud enim commodo esse eiusmod velit dolore.
Mollit dolore aute qui nostrud Lorem proident fugiat ipsum eiusmod aliquip ut. Nulla minim deserunt cupidatat ipsum. Incididunt non labore tempor quis veniam ea proident culpa. Cupidatat proident Lorem anim quis non. Est nostrud ullamco minim consequat cillum occaecat qui irure. Proident dolor laborum sunt exercitation nulla elit.";

file_put_contents('texto_completo.txt',$text); #fopen, fwrite, fclose na mesma funcao
#Read
$outext = file_get_contents($text); #to long filename
echo $outext;
