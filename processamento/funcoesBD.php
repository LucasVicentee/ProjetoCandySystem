<?php

function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1",
                                "root", 
                                "", 
                                "confeitaria");
    return($conexao);
}

function inserirFuncao($funcao, $salario){

    $conexao = conectarBD(); //Canal de comunicação entre APP e BD

    $consulta = "INSERT INTO funcoes (funcao, salario) VALUES ('$funcao', '$salario')"; //Query que será aplicada no SGBD

    mysqli_query($conexao, $consulta);
}

function inserirReceitas($nome, $descricao) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO receitas (nome_receita, descricao_receita) VALUES ('$nome', '$descricao')";

    mysqli_query($conexao, $consulta); 
}

function inserirProduto($id_produto, $nome_produto, $data_fabricacao, $data_validade, $descricao_produto, $qtd_produto) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO produto (id_produto, nome_produto, data_fabricacao, data_validade, descricao_produto, qtd_produto) VALUES ('$id_produto', '$nome_produto','$data_fabricacao', '$data_validade', '$descricao_produto', '$qtd_produto')";

    mysqli_query($conexao, $consulta);
}

function inserirIngredientes($nome, $codigo, $numero, $descricao) {
    $conexao = conectarBD();

    $consulta = "INSERT INTO ingredientes (id_ingrediente, nome_ingrediente, data_validade_ingre, qtd_ingredientes) VALUES ('$nome', '$codigo', '$numero', '$descricao')";

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

    $conexao = conectarBD(); //Canal de comunicação entre APP e BD
    
    $consulta = "SELECT * FROM funcoes";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

function retornarFuncionarios(){

    $conexao = conectarBD(); //Canal de comunicação entre APP e BD
    
    $consulta = "SELECT * FROM funcionarios";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

function retornarFuncaoPeloId($id){
    $conexao = conectarBD(); //Canal de comunicação entre APP e BD
    
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