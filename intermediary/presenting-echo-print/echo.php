<?php

    /*
        Instrução muito usada para apresentar conteúdo PHP numa pagina        
    */

    $nome= "Gabriel";
    $sobrenome = " Carvalho";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $nome . $sobrenome?><br>
    <?php echo "$nome $sobrenome"?>
    <h3><?php echo "$nome $sobrenome"?></h3>
    <p>Nome do cliente: <?= "<strong>$nome $sobrenome </strong>"?></p>

</body>
</html>