<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['nome']) && !empty($_POST['codigo']) && !empty($_POST['numero']) && !empty($_POST['descricao'])){

      $nome = $_POST['nome'];
      $codigo = $_POST['codigo'];
      $numero = $_POST['numero'];
      $descricao = $_POST['descricao'];

      //Chamada da função para BD
      inserirProduto($nome, $codigo, $numero, $descricao);

      header('Location:../view/cadIngredientesProcessamento.php');
      die();
}

?>