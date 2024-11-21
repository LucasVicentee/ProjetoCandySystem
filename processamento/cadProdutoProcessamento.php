<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['nome_produto']) && !empty($_POST['preco']) && !empty($_POST['data_fabricacao']) && !empty($_POST['data_validade']) && !empty($_POST['descricao_produto']) && !empty($_POST['qtd_produto'])){

      $preco = $_POST['preco'];
      $nome_produto = $_POST['nome_produto'];
      $data_fabricacao = $_POST['data_fabricacao'];
      $data_validade = $_POST['data_validade'];
      $descricao_produto = $_POST['descricao_produto'];
      $qtd_produto = $_POST['qtd_produto'];

      //Chamada da função para BD
      inserirProduto($nome_produto, $data_fabricacao, $data_validade, $descricao_produto, $qtd_produto, $preco);

      header('Location:../view/cadProduto.php');
      die();
}

?>