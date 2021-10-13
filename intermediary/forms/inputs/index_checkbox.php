<?php 
    print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form action="./index_checkbox.php" method="POST">
        <p>Indique as bebidas que vc gosta</p>
        <label for="check_1"><input type="checkbox" name="check_vinho" id="check_1">Vinho</label>
        <label for="check_2"><input type="checkbox" name="check_cerveja" id="check_2">Cerveja</label>
        <label for="check_3"><input type="checkbox" name="check_refrigerante" id="check_3">Refrigerante</label>
        <br>
        <button type="submit">Aceitar</button>
    </form>
</body>
</html>