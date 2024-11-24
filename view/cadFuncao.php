<?php
if (!isset($_COOKIE['usuario']) || !isset($_COOKIE['senha'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tech-Candy</title>
    <link rel="stylesheet" href="../CSS/styleFormulario.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Home.php"><img src="../Imagens/Logo TC.png" alt=""></a>
    <section class="sair"><a href="logout.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>
    <form id="form" method="POST" action="../processamento/cadFuncaoProcessamento.php">
        <h2>Cadastrar Função</h2>
        <section class="campo">
          <label for="funcao">Função:</label>
          <input type="text" id="funcao" name="funcao"  required>
        </section>
        <section class="campo">
          <label for="salario">Salario:</label>
          <input type="number" id="salario" name="salario" required>
        </section>
        <button type="submit">Enviar</button>
      </form>
</main>
</body>
</html>