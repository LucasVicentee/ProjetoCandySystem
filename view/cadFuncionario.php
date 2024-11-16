<?php
    require_once "../processamento/funcoesBD.php";
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
    <form id="form" method="POST" action="../processamento/cadFuncionarioProcessamento.php">
        <h2>Cadastrar Funcionario</h2>
        <section class="campo">
          <label for="nome">Nome do Funcionario:</label>
          <input type="text" id="nome" name="nome"  required>
        </section>
        <section class="campo">
          <label for="funcao">Função:</label>
          <input list="countries" id="funcao" name="funcao">
          <datalist id="countries">
            <?php
              $listaFuncoes = retornarFuncoes();

              while ($funcao = mysqli_fetch_assoc($listaFuncoes)) {
                echo '<option value="' . $funcao["funcao"] . '">';
            }
            ?>
          </datalist>
        </section>
        <section class="campo">
          <label for="code">CPF:</label>
          <input type="text" id="Code" name="cpf" required>
        </section>
        <section class="campo">
            <label for="phone">Telefone:</label>
            <input type="number" id="Code" name="telefone" required>
          </section>
        <section class="campo">
          <label >Endereco:</label>
          <input type="text" name="endereco" required>  
        </section>
        <section class="campo">
            <label for="cpf">Senha:</label>
            <input type="password" id="Code" name="senha" required>            
          </section>   
        <button type="submit">Enviar</button>
      </form>
    
</main>   
  <footer>

  </footer>
</body>
</html>