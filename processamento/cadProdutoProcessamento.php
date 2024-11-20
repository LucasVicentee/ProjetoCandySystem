<?php

session_start();
require_once "funcoesBD.php";


if(!empty($_POST['data_validade']) && !empty($_POST['data_fabricacao']) && !empty($_POST['descricao_produto']) && !empty($_POST['qtd_produto'])){

      
      $nome = $_POST['nome_produto'];
      $data_fabricacao = $_POST['data_fabricacao'];
      $data_validade = $_POST['data_validade'];
      $descricao_produto = $_POST['descricao_produto'];
      $qtd_produto = $_POST['qtd_produto'];


      inserirProduto($nome_produto, $data_validade, $data_fabricacao, $descricao_produto, $qtd_produto);

      header('Location:../view/cadProduto.php');
      die();
}

?>