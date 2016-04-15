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
  }

  $editar = false;

  $taxis = $taxiControler->consultar('');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Taxis</title>
  </head>
  <body>
    <?php
        include 'TaxisForm.php';

        if(!$editar){
          include 'TaxisTable.php';
        }
     ?>

     <script src="../Controller/ajax.js">
     </script>
  </body>
</html>
