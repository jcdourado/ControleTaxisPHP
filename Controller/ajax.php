<?php
  include 'TaxiController.class.php';
  include '../Util/Helper.php';

  if(isset($_GET['nomeBuscar'])){
    $controller = new TaxiController;
    $taxis = $controller->consultar($_GET['nomeBuscar']);
    $retorn = "<table>
              <tr>
                <th>Nome</th>
                <th>Placa</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Bairro</th>
              </tr>";
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
      $retorn.="</table>";
    echo $retorn;
  }

?>
