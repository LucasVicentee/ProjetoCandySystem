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
    $listaIngredientes = retornarIngredientes();

    while ($ingrediente = mysqli_fetch_assoc($listaIngredientes)) {
        echo "
        <section class='conteudo-bloco'>
            <h2>Ingrediente: {$ingrediente['nome_ingrediente']}</h2>
            <p><strong>Ingrediente ID:</strong> {$ingrediente['id_ingrediente']}</p>
            <p><strong>Data de Validade:</strong><br> {$ingrediente['data_validade_ingre']}</p>
            <p><strong>Quantidade:</strong> {$ingrediente['qtd_ingredientes']}</p>
        </section>
        ";
    }
?>
</section>
</main>
</html>