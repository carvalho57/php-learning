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
    $nome = "Gabriel";
    ?>
    <p> Query String
        <a href="page.php?nome=<?= $nome ?>&sobrenome=carvalho">To Page</a>
    </p>

    <form action="login.php" method="POST">
        <div>
            <label for="usuario">Usuário: </label>
            <input id="usuario" type="text" name="usuario">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input id="senha" type="password" name="senha">
        </div>
        <div>
            <label for="check_termo">
                <input type="checkbox" name="check_termo" id="check_termo">
                Aceitos os termos e condições do site
            </label>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    
    <a href="inputs/index_checkbox.php" target="_blank">CheckBox</a> <br>
    <a href="inputs/index_radio.php" target="_blank">Radio Buttons</a><br>
    <a href="inputs/input_date.php" target="_blank">Date</a><br>
</body>

</html>