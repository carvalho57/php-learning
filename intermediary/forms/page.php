<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <?php 
        // $nome = $_GET["nome"] ?? "aa"; #isset
        $nome = htmlspecialchars($_GET["nome"]); #filtra codigos maliciosos
        print_r($_GET) 
    ?>
    <h2> My name is <?=$nome ?></h2>
    
</body>
</html>