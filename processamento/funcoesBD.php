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

?>