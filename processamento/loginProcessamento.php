<?php
session_start();
require_once "funcoesBD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (checarLogin($usuario, $senha)) {
        setcookie("usuario", $usuario, time() + (30 * 60), "/");
        setcookie("senha", $senha, time() + (30 * 60), "/");

        header('Location: ../view/Home.php');
        exit();
    } else {
        $_SESSION['mensagem'] = "<p class='erro'>Usuário ou senha inválidos!</p>";
    }
}

header('Location:../view/login.php');
die();
?>
