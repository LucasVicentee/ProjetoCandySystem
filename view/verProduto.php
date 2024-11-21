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
    <a href="Main.php"><img src="../Imagens/Logo TC.png" alt=""></a>
    <section class="sair"><a href="logout.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>
<section>
<?php
    $listaProdutos = retornarProdutos();

    while ($produto = mysqli_fetch_assoc($listaProdutos)) {
        echo "
        <section class='conteudo-bloco'>
            <h2>Produto: {$produto['nome_produto']}</h2>
            <p><strong>Produto ID:</strong> {$produto['id_produto']}</p>
            <p><strong>Data de Validade:</strong><br> {$produto['data_validade']}</p>
            <p><strong>Data de Fabricação:</strong><br> {$produto['data_fabricacao']}</p>
            <p><strong>Quantidade:</strong> {$produto['qtd_produto']}</p>
            <p><strong>Descrição:</strong> {$produto['descricao_produto']}</p>
            <p><strong>Preço:</strong> R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>
        </section>
        ";
    }
?>
</section>
</main>
</html>