<?php

session_start();
require_once "funcoesBD.php";


if(!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['telefone']) && !empty($_POST['endereco']) && !empty($_POST['senha']) && !empty($_POST['funcao'])){

      $funcao = $_POST['funcao'];
      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $telefone = $_POST['telefone'];
      $endereco = $_POST['endereco'];
      $senha = $_POST['senha'];


      inserirFuncionario($nome, $funcao, $cpf, $telefone, $endereco, $senha);

      header('Location:../view/cadFuncionario.php');
      die();
}

?>