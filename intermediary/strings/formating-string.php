<?php


#printf  printa a string no formato especificado
echo "PRINTF \n\n";
printf("Ola Mundo\n");
printf("O meu nome é %s\n", 'Gabriel');
printf("%c\n", 65);

#sprintf retorna a string no formato especificado
echo "SPRINTF \n\n";
echo sprintf("O meu nome é %s e tenho %s\n", 'Gabriel', 20);
echo sprintf("O meu nome é %s e tenho %s\n", 'Gabriel', 20);
echo sprintf('O meu nome é %2$s e tenho %1$s' . "\n", 20, 'Gabriel');
echo sprintf("Capacidade:%-4d\n", 20);
echo sprintf("Capacidade:%04d", 20);
echo "\n\n";
// echo sprintf("O valor total da compra foi de %07.2f",425.529);
echo sprintf("O valor total da compra foi de %01.2f",425.529);
    #search on php.net
#vprintf
#sscanf
#fscanf





