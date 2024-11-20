<?php

session_start();
require_once "funcoesBD.php";

if(!empty($_POST['nome_receita']) && !empty($_POST['descricao_receita'])){

      $nome = $_POST['nome_receita'];
      $descricao = $_POST['descricao_receita'];


      inserirReceitas($nome, $descricao);

      header('Location:../view/cadReceita.php');
      die();
}

?>