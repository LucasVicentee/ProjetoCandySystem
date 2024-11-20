<?php

session_start();
require_once "funcoesBD.php";


if(!empty($_POST['nome_ingrediente']) && !empty($_POST['data_validade_ingre']) && !empty($_POST['qtd_ingredientes'])){

      $nome = $_POST['nome_ingrediente'];
      $numero = $_POST['data_validade_ingre'];
      $descricao = $_POST['qtd_ingredientes'];


      inserirIngredientes($nome, $numero, $descricao);

      header('Location:../view/cadIngredientes.php');
      die();
}

?>