<?php

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
    <section class="sair"><a href="Home.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>
    <form id="form" method="#" action="#">
        <h2>Cadastrar Ingrediente</h2>
        <section class="campo">
          <label for="nome">Ingrediente:</label>
          <input type="text" id="nome" name="nome"  required>
        </section>
        <section class="campo">
          <label for="code">Codigo:</label>
          <input type="number" id="Code" name="codigo" required>
        </section>
        <section class="campo">
            <label for="phone">Data de Validade:</label>
            <input type="date" id="Code" name="numero" required>
          </section>
        <section class="campo">
            <label for="cpf">Descrição:</label>
            <textarea name="descricao" id="code" required></textarea>
          </section>   
        <button type="submit">Enviar</button>
      </form>
    
</main>   
  <footer>

  </footer>
</body>
</html>