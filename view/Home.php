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
    <link rel="stylesheet" href="../CSS/stylemain.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Home.php"><img src="../Imagens/Logo TC.png" alt="Logo"></a>
    <section class="sair">
        <a href="logout.php"><img src="../Imagens/saida.png" alt="Logo"></a>
    </section>
</header>


<div class="main-content">
    <section class="bloco-de-navegacao">
        <section class="cadastrar">
            <li class="submenu"><a href="#">Cadastrar</a>
                <ul class="submenu-lista">
                    <li><a href="cadProduto.php">Cadastrar Produto</a></li>
                    <li><a href="cadFuncao.php">Cadastrar Função</a></li>
                    <li><a href="cadFuncionario.php">Cadastrar Funcionario</a></li>
                    <li><a href="cadIngredientes.php">Cadastrar Ingrediente</a></li>
                    <li><a href="cadReceita.php">Cadastrar Receita</a></li>
                </ul>
            </li>
        </section>
        <section class="visualizar">
            <li class="submenu"><a href="#">Visualizar</a>
                <ul class="submenu-lista">
                    <li><a href="verFuncao.php">Visualizar Funções</a></li>
                    <li><a href="verFuncionario.php">Visualizar Funcionario</a></li>
                    <li><a href="verIngredientes.php">Visualizar Ingredientes</a></li>
                    <li><a href="verReceitas.php">Visualizar Receita</a></li>
                    <li><a href="verProduto.php">Visualizar Produtos</a></li>
                </ul>
            </li>
        </section>
    </section>
</div>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Tech-Candy. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
