<table>
  <tr>
    <th>Nome</th>
    <th>Placa</th>
    <th>Estado</th>
    <th>Cidade</th>
    <th>Bairro</th>
  </tr>
  <?php
    foreach ($taxis as $taxi) :
  ?>
      <tr>
        <td><?php echo $taxi['nome']; ?></td>
        <td><?php echo $taxi['placa']; ?></td>
        <td><?php echo estado_view($taxi['estado']); ?></td>
        <td><?php echo $taxi['cidade']; ?></td>
        <td><?php echo $taxi['bairro']; ?></td>
      </tr>
  <?php
    endforeach;
   ?>

</table>
