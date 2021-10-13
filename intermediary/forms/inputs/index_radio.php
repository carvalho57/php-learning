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
    <form action="./index_radio.php" method="POST">
        <p>Qual é o melhor filme</p>
        <label for="radio_1"><input required type="radio" name="radio_filme" id="radio_1" value="Star Wars">Star Wars</label>
        <label for="radio_2"><input required type="radio" name="radio_filme" id="radio_2" value="Star Trek">Star Trek</label>
        <label for="radio_3"><input required type="radio" name="radio_filme" id="radio_3" value="Matrix">Matrix</label>
        <br>
        <button type="submit">Aceitar</button>
    </form>
</body>
</html>