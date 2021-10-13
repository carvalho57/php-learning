<?php

    print_r($_POST);

    // $data_nascimento = explode(" ", $_POST['data_nascimento']);
    echo $_POST['data_nascimento'];
    echo gettype($_POST['data_nascimento']);
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>

    <!-- https://flatpickr.js.org/examples/#basic -->

    <form action="./input_date.php" method="post">
        <div>
            <label for="data">Data de Nascimento</label>
            <input type="text" name="data_nascimento" id="data">
        </div>
        <div><button type="submit">Enviar</button></div>
    </form>



    <script>
        var data = flatpickr("#data", {       
            dateFormat: "d.m.Y",
            minDate: "today"
        });
    </script>
</body>

</html>