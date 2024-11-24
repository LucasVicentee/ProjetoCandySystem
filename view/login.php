<?php
session_start();

$mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : "";

unset($_SESSION['mensagem']);

if (isset($_COOKIE['usuario']) && isset($_COOKIE['senha'])) {
    header('Location: Home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Confeitaria</title>
    <link rel="stylesheet" href="../CSS/styleLogin.css">
</head>
<body>

<section class="login-container">
    <h2>Login</h2>
    <form method="POST" action="../processamento/loginProcessamento.php">
        <label for="usuario">Nome de usuário</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>

    <?php 
    if ($mensagem != "") {
        echo $mensagem;
    }
    ?>

</section>

</body>
</html>
