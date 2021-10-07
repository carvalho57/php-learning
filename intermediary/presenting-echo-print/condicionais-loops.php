<?php
  $show = true;
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

    <!-- Usando PHP -->
    <?php
        for ($i=0; $i < 5; $i++) { 
            echo "<p> $i </p>";
        }
    ?>

    <hr>
    <!-- Usando PHP + HTML-->
    <?php for ($i=0; $i < 5; $i++) :?>
        <p><?= $i ?></p>
    <?php endfor; ?>

    <?php if($show) :?>
        <p>Este paragrafo é para ser apresentado </p>
    <?php endif;?>

</body>
</html>
