<?php

  include '../Util/Helper.php';
  include '../Model/Taxi.class.php';
  include '../Controller/TaxiController.class.php';

  $controller = new TaxiController;

  $taxi = $controller->buscarRegistro($_GET['editar']);

  $erros = array();

  if($_POST){
    $taxi2 = array();

    if(isset($_POST['nome']) && trim($_POST['nome']) != ""){
      $taxi2['NOME'] = $_POST['nome'];
    }
    else{
      $erros['NOME'] = "Colocar um nome";
    }

    if(isset($_POST['placa']) && trim($_POST['placa']) != ""){
      $taxi2['PLACA'] = $_POST['placa'];
    }
    else{
      $erros['PLACA'] = "Colocar uma placa";
    }

    if(count($erros) == 0){
        if(isset($_POST['estado'])){
          $taxi2['ESTADO'] = $_POST['estado'];
        }

        if(isset($_POST['cidade'])){
          $taxi2['CIDADE'] = $_POST['cidade'];
        }

        if(isset($_POST['bairro'])){
          $taxi2['BAIRRO'] = $_POST['bairro'];
        }

        $controller->editar($taxi2,$_GET['editar']);
        header('Location: TaxisView.php');
        die();
    }

  }

  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Editar Taxi</title>
    </head>
    <body>
      <?php
       include 'TaxisForm.php'; ?>
    </body>
  </html>
