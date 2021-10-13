<?php
    
    if($_SERVER['REQUEST_METHOD'] != 'POST')
        die('acesso negado!');

    if(!isset($_POST["usuario"]) || !isset($_POST["senha"])) {
        header("location: index.php");
    }
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    echo "Informações de login$usuario $senha";
    echo "<br>";
    print_r($_POST)
?>

