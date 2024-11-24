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
    <form id="form" method="POST" action="../processamento/cadProdutoProcessamento.php">
        <h2>Cadastrar Produto</h2>
        <section class="campo">
          <label for="nome">Nome do Produto:</label>
          <input type="text" id="nome" name="nome_produto"  required>
        </section>
          <section class="campo">
            <label for="data_validade">Data de Validade:</label>
            <input type="date" id="Code" name="data_validade"  required>
          </section>
          <section class="campo">
            <label for="data_fabricacao">Data de Fabricação:</label>
            <input type="date" id="Code" name="data_fabricacao"  required>
          </section>
        <section class="campo">
          <label for="descricao">Descrição do Produto:</label>
          <textarea id="descricao" name="descricao_produto"  required></textarea>
        </section>
        <section class="campo">
          <label for="quantidade">Quantidade do Produto:</label>
          <input type="number" id="Code" name="qtd_produto"  required>
        </section>
        <section class="campo">
          <label for="quantidade">Preço:</label>
          <input type="number" id="Code" name="preco"  required>
        </section>
        <button type="submit">Enviar</button>
      </form>
    
</main>   
  <footer>

  </footer>
</body>
</html>