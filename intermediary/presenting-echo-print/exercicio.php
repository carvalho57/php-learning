<?php

$dados = [
    ['joao', 'M', 'Portugal'],
    ['ana', 'F', 'Brasil'],
    ['carlos', 'M', 'Angola'],
    ['Matilde', 'F', 'Moçambique'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <div class="container">
        <table class="table  is-bordered is-striped">
            <tr>
                <th>Nome</th>
                <th>Genero</th>
                <th>Pais</th>
            </tr>
            <?php foreach($dados as $item) : ?>
                <tr>
                    <td><?= $item[0] ?></td>
                    <td><?= $item[1] ?></td>
                    <td><?= $item[2] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>