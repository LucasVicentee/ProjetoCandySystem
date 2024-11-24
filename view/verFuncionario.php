<?php
    require_once "../processamento/funcoesBD.php"; // Substitua pelo arquivo que retorna os funcionários
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Funcionários - Tech-Candy</title>
    <link rel="stylesheet" href="../CSS/styleFormulario.css">
    <link rel="stylesheet" href="../CSS/verFuncionarios.css">
    <link rel="shortcut icon" href="../Imagens/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <a href="Home.php"><img src="../Imagens/Logo TC.png" alt="Tech-Candy"></a>
    <section class="sair"><a href="logout.php"><img src="../Imagens/saida.png" alt="Sair"></a></section>
</header>
<main>
    <section>
    <?php
    $listaFuncionarios = retornarFuncionarios();

    $todasFuncoes = [];
    $resultadoFuncoes = retornarFuncoes();
    while ($funcao = mysqli_fetch_assoc($resultadoFuncoes)) {
        $todasFuncoes[$funcao['pk_funcao']] = $funcao;
    }

    while ($funcionario = mysqli_fetch_assoc($listaFuncionarios)) {
        $funcao = $todasFuncoes[$funcionario['fk_funcao']] ?? null;

        echo "
        <section class='conteudo-bloco'>
            <h2>Funcionário: {$funcionario['nome']}</h2>
            <p><strong>CPF:</strong> {$funcionario['cpf']}</p>
            <p><strong>Telefone:</strong> {$funcionario['telefone']}</p>
            <p><strong>Endereço:</strong> {$funcionario['endereco']}</p>";

        if ($funcao) {
            echo "
            <p><strong>Função:</strong> {$funcao['funcao']}</p>
            <p><strong>Salário:</strong> R$ " . number_format($funcao['salario'], 2, ',', '.') . "</p>";
        } else {
            echo "<p><strong>Função:</strong> Não encontrada</p>";
        }

        echo "</section>";
    }
?>
    </section>
</main>
<footer>
</footer>
</body>
</html>
