<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tech-Candy</title>
    <link rel="stylesheet" href="../CSS/styleHome.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Home.php"><img src="../Imagens/Logo TC.png" alt="Logo"></a>
    <section class="sair">
        <a href="Home.php"><img src="../Imagens/saida.png" alt="Logo"></a>
    </section>
</header>    
<nav class="menu-lateral">
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="#">Cadastrar</a>
        <ul class="submenu">
          <li><a href="cadProduto.php">Cadastrar Produto</a></li>
          <li><a href="cadFuncionario.php">Cadastrar Funcionario</a></li>
          <li><a href="cadIngrediente.php">Cadastrar Ingrediente</a></li>
          <li><a href="cadReceita.php">Cadastrar Receita</a></li>
        </ul>
      </li>
      <li><a href="#">Vizualizar</a>
        <ul class="submenu">
          <li><a href="cadProduto.php">Vizualizar Produto</a></li>
          <li><a href="cadFuncionario.php">Vizualizar Funcionario</a></li>
          <li><a href="cadEstoque.php">Vizualizar Estoque</a></li>
          <li><a href="cadReceita.php">Vizualizar Receita</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <footer>

  </footer>
</body>
</html>
