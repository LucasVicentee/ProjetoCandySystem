<?php

session_start();
require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['funcao']) && !empty($_POST['salario'])){

      $funcao = $_POST['funcao'];
      $salario = $_POST['salario'];

      //Chamada da função para BD
      inserirFuncao($funcao, $salario);

      header('Location:../view/cadFuncao.php');
      die();
}

?>