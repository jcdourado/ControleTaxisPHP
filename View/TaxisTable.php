<div class="form-group">
  <input type="button" name="exibirTodos" value="Exibir todos" id="btnExibir" class="form-control btn-success btn-block ">
</div>
<table class="table table-bordered table-hover table-condensed table-responsive">
  <thead>
    <th>Nome</th>
    <th>Placa</th>
    <th>Estado</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Opções</th>
  <thead>
  <tbody id="tabelaResultado">
    <?php foreach ($taxis as $taxi ): ?>
      <tr>
        <td><?php echo $taxi['NOME']; ?></td>
        <td><?php echo $taxi['PLACA']; ?></td>
        <td><?php echo estado_view($taxi['ESTADO']); ?></td>
        <td><?php echo $taxi['CIDADE']; ?></td>
        <td><?php echo $taxi['BAIRRO']; ?></td>
        <td>
        <?php echo "<a  class='btn btn-info' href='TaxiEditar.php?editar={$taxi['ID']}' ?> Editar</a>"; ?>
        <?php echo "<a  class='btn btn-info' href='../Controller/TaxiController.class.php?duplicar={$taxi['ID']}' ?> Duplicar</a>"; ?>
        <?php echo "<a  class='btn btn-info' href='../Controller/TaxiController.class.php?excluir={$taxi['ID']}' ?> Excluir</a>"; ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
