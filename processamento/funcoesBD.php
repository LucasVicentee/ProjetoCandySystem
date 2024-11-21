<?php

function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1",
                                "root", 
                                "", 
                                "confeitaria");
    return($conexao);
}

function inserirFuncao($funcao, $salario){

    $conexao = conectarBD(); 

    $consulta = "INSERT INTO funcoes (funcao, salario) VALUES ('$funcao', '$salario')";

    mysqli_query($conexao, $consulta);
}

function inserirReceitas($nome, $descricao) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO receitas (nome_receita, descricao_receita) VALUES ('$nome', '$descricao')";

    mysqli_query($conexao, $consulta); 
}

function inserirProduto($nome_produto, $data_fabricacao, $data_validade, $descricao_produto, $qtd_produto, $preco) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO produto (nome_produto, data_fabricacao, data_validade, descricao_produto, qtd_produto, preco) VALUES ('$nome_produto','$data_fabricacao', '$data_validade', '$descricao_produto', '$qtd_produto', '$preco')";

    mysqli_query($conexao, $consulta);
}

function inserirIngredientes($nome, $numero, $descricao) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO ingredientes (nome_ingrediente, data_validade_ingre, qtd_ingredientes) VALUES ('$nome','$numero', '$descricao')";

    mysqli_query($conexao, $consulta);
}

function inserirFuncionario($nome, $funcao, $cpf, $telefone, $endereco, $senha) {
    $conexao = conectarBD();

    $consulta = "SELECT * FROM funcoes";
    $listFuncoes = mysqli_query($conexao, $consulta);

    $codigo = 0;

    while($f = mysqli_fetch_assoc($listFuncoes)){
        if ($f["funcao"] == $funcao)
        {
            $codigo = $f["pk_funcao"];
            echo "CODIGO: " . $codigo;
        }
    }

    $consulta = "INSERT INTO funcionarios (nome, cpf, telefone, endereco, senha, fk_funcao) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$senha', '$codigo')";

    mysqli_query($conexao, $consulta);
}

function retornarFuncoes(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM funcoes";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

function retornarProdutos(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM produto";

    $listaProdutos = mysqli_query($conexao, $consulta);

    return($listaProdutos);
}

function retornarIngredientes(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM ingredientes";

    $listaIngredientes = mysqli_query($conexao, $consulta);

    return($listaIngredientes);
}

function retornarReceitas(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM receitas";

    $listaReceitas = mysqli_query($conexao, $consulta);

    return($listaReceitas);
}

function retornarFuncionarios(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM funcionarios";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

function retornarFuncaoPeloId($id){
    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM funcoes WHERE pk_funcao = '$id'";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

function checarLogin($usuario, $senha) {
    $conexao = conectarBD();
    
    $consulta = "SELECT * FROM funcionarios WHERE nome = '$usuario' AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $consulta);

    return (mysqli_num_rows($resultado) > 0);
}

?>