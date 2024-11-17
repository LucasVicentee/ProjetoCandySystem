<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['nome_receita']) && !empty($_POST['descricao_receita'])){

      $nome_receita = $_POST['nome_receita'];
      $descricao_receita = $_POST['descricao_receita'];

      //Chamada da função para BD
      inserirReceita($nome_receita, $descricao_receita);

      header('Location:../view/cadReceitaProcessamento.php');
      die();
}

?>