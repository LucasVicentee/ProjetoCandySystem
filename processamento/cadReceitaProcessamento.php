<?php

session_start();
require_once "funcoesBD.php";
//Só para atualizar
//Cadastro de Cliente
if(!empty($_POST['nome']) && !empty($_POST['descricao'])){

      $nome = $_POST['nome'];
      $descricao = $_POST['descricao'];

      //Chamada da função para BD
      inserirReceita($nome, $descricao);

      header('Location:../view/cadReceitaProcessamento.php');
      die();
}

?>