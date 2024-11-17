<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['id_ingrediente']) && !empty($_POST['nome_ingrediente']) && !empty($_POST['data_validade_ingre']) && !empty($_POST['qtd_ingredientes'])){

      $id_ingrediente = $_POST['id_ingrediente'];
      $nome_ingrediente = $_POST['nome_ingrediente'];
      $data_validade_ingre = $_POST['data_validade_ingre'];
      $qtd_ingredientes = $_POST['qtd_ingredientes'];

      //Chamada da função para BD
      inserirProduto($id_ingrediente, $nome_ingrediente, $data_validade_ingre, $qtd_ingredientes);

      header('Location:../view/cadIngredientesProcessamento.php');
      die();
}

?>