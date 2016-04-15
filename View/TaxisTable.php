<input type="button" name="exibirTodos" value="Exibir todos" id="btnExibir">
<table>
  <thead>
    <th>Nome</th>
    <th>Placa</th>
    <th>Estado</th>
    <th>Cidade</th>
    <th>Bairro</th>
  <thead>
  <tbody id="tabelaResultado">
    <?php foreach ($taxis as $taxi ): ?>
      <tr>
        <td><?php echo $taxi['NOME']; ?></td>
        <td><?php echo $taxi['PLACA']; ?></td>
        <td><?php echo estado_view($taxi['ESTADO']); ?></td>
        <td><?php echo $taxi['CIDADE']; ?></td>
        <td><?php echo $taxi['BAIRRO']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
