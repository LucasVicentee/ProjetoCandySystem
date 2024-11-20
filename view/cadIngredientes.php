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
    <a href="Main.php"><img src="../Imagens/Logo TC.png" alt=""></a>
    <section class="sair"><a href="Main.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>
    <form id="form" method="POST" action="../processamento/cadIngredientesProcessamento.php">
        <h2>Cadastrar Ingrediente</h2>
        <section class="campo">
          <label for="nome">Ingrediente:</label>
          <input type="text" id="nome" name="nome_ingre"  required>
        </section>
        <section class="campo">
            <label for="validade_ingrediente">Data de Validade:</label>
            <input type="date" id="Code" name="data_validade_ingre" required>
          </section>
        <section class="campo">
            <label for="quantidade">quantidade:</label>
            <input name="qtd_ingre" id="code" required>
          </section>   
        <button type="submit">Enviar</button>
      </form>
    
</main>   
  <footer>

  </footer>
</body>
</html>