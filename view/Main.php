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
    <link rel="stylesheet" href="../CSS/styleHome.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Main.php"><img src="../Imagens/Logo TC.png" alt="Logo"></a>
    <section class="sair">
        <a href="logout.php"><img src="../Imagens/saida.png" alt="Logo"></a>
    </section>
</header>    
<nav class="menu-lateral">
    <ul>
      <li><a href="Main.php">Home</a></li>
      <li><a href="#">Cadastrar</a>
        <ul class="submenu">
          <li><a href="cadProduto.php">Cadastrar Produto</a></li>
          <li><a href="cadFuncao.php">Cadastrar Função</a></li>
          <li><a href="cadFuncionario.php">Cadastrar Funcionario</a></li>
          <li><a href="cadIngredientes.php">Cadastrar Ingrediente</a></li>
          <li><a href="cadReceita.php">Cadastrar Receita</a></li>
        </ul>
      </li>
      <li><a href="#">Vizualizar</a>
        <ul class="submenu">
          <li><a href="verFuncao.php">Vizualizar Funções</a></li>
          <li><a href="verFuncionario.php">Vizualizar Funcionario</a></li>
          <li><a href="verIngredientes.php">Vizualizar Ingredientes</a></li>
          <li><a href="verReceitas.php">Vizualizar Receita</a></li>
          <li><a href="verProdutos.php">Vizualizar Produtos</a></li>
        </ul>
      </li>
    </ul>
</nav>
<footer>

</footer>
</body>
</html>
