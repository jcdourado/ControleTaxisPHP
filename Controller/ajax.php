<?php
  include 'TaxiController.class.php';
  include '../Util/Helper.php';

  if(isset($_GET['nomeBuscar'])){
    $controller = new TaxiController;
    $taxis = $controller->consultar($_GET['nomeBuscar']);
    $retorn = "<tbody>";
    foreach ($taxis as $taxi) {
      $retorn .= "<tr>
          <td>{$taxi['NOME']}</td>
          <td>{$taxi['PLACA']}</td>
          <td>";
      $retorn.= estado_view($taxi['ESTADO'])."</td>
          <td>{$taxi['CIDADE']}</td>
          <td>{$taxi['BAIRRO']}</td>
        </tr>";
      }
      $retorn.="</tbody>";
    echo $retorn;
  }

?>
