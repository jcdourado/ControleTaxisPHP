<?php
  include '../Util/Helper.php';
  include '../Model/Taxi.class.php';
  include '../Controller/TaxiController.class.php';

  $taxiControler = new TaxiController;

  if(tem_form()){
    $taxi = new Taxi;

    if(isset($_POST['nome'])){
      $taxi->nome = $_POST['nome'];
    }

    if(isset($_POST['placa'])){
      $taxi->placa = $_POST['placa'];
    }

    if(isset($_POST['estado'])){
      $taxi->estado = $_POST['estado'];
    }

    if(isset($_POST['cidade'])){
      $taxi->cidade = $_POST['cidade'];
    }

    if(isset($_POST['bairro'])){
      $taxi->bairro = $_POST['bairro'];
    }

    $taxiControler->adicionar($taxi);

    $taxi->nome='';
    $taxi->placa='';
    $taxi->estado='no';
    $taxi->cidade='';
    $taxi->bairro='';
  }

  $taxis = $taxiControler->consultar('');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Taxis</title>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      
    <?php

        include 'TaxisForm.php';

        include "TaxisTable.php";

     ?>
    </div>

    <script src="../Controller/ajax.js">
     </script>
  </body>
</html>
