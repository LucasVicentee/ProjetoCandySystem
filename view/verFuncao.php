<?php
    require_once "../processamento/funcoesBD.php";

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
    <link rel="stylesheet" href="../CSS/verFuncao.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Home.php"><img src="../Imagens/Logo TC.png" alt=""></a>
    <section class="sair"><a href="logout.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>

<section>
<?php
    $listaFuncoes = retornarFuncoes();

    while ($funcao = mysqli_fetch_assoc($listaFuncoes)) {
        echo "
        <section class='conteudo-bloco'>
            <h2>Função: {$funcao['funcao']}</h2>
            <p><strong>ID:</strong> {$funcao['pk_funcao']}</p>
            <p><strong>Salário:</strong> R$ " . number_format($funcao['salario'], 2, ',', '.') . "</p>
        </section>
        ";
    }
?>
</section>
</main>   
<footer>

</footer>
</body>
</html>