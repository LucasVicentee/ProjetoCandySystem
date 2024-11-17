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
    <form id="form" method="#" action="#">
        <h2>Cadastrar Produto</h2>
        <section class="campo">
          <label for="nome">Nome do Produto:</label>
          <input type="text" id="nome" name="nome"  required>
        </section>
        <section class="campo">
          <label for="code">Código do Produto:</label>
          <input type="text" id="Code" name="codigo" required>
        </section>
        <section class="campo">
            <label for="preco">Preço do Produto:</label>
            <input type="number" id="Code" name="codigo" placeholder="R$" required>
          </section>
        <section class="campo">
          <label for="descricao">Descrição do Produto:</label>
          <textarea id="descricao" name="descricao"  required></textarea>
        </section>
        <button type="submit">Enviar</button>
      </form>
    
</main>   
  <footer>

  </footer>
</body>
</html>