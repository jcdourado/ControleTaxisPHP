<div class="jumbotron">
  <h1>Controle de taxis</h1>
  <form method="post">

    <div class="form-group  ">
      <div class="row">
        <div class="col-xs-8 <?php if(@$erros['NOME']){ echo 'has-error';} ?>" >
          <label>Nome:</label>
          <input id="campoNome" type="text" class="form-control" name="nome" maxlength="30">
          <?php if(@$erros['NOME']) echo "<p class='help-block'>{$erros['NOME']}</p>"; ?>
        </div>

        <div class="col-xs-4 <?php if($erros['PLACA']) echo 'has-error'; ?>" >
          <label>Placa:</label>
          <input type="text" name="placa" class="form-control" maxlength="8" >
          <?php if(@$erros['PLACA']) echo "<p class='help-block'>{$erros['PLACA']}</p>"; ?>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-xs-4">
          <label>Estado:</label>
          <select class="form-control" name="estado">
            <option value="no">Selecione o Estado</option> 
        		<option value="ac">Acre</option>
        		<option value="al">Alagoas</option>
        		<option value="am">Amazonas</option>
        		<option value="ap">Amapá</option>
        		<option value="ba">Bahia</option>
        		<option value="ce">Ceará</option>
        		<option value="df">Distrito Federal</option>
        		<option value="es">Espírito Santo</option>
        		<option value="go">Goiás</option>
        		<option value="ma">Maranhão</option>
        		<option value="mt">Mato Grosso</option>
        		<option value="ms">Mato Grosso do Sul</option>
        		<option value="mg">Minas Gerais</option>
        		<option value="pa">Pará</option>
        		<option value="pb">Paraíba</option>
        		<option value="pr">Paraná</option>
        		<option value="pe">Pernambuco</option>
        		<option value="pi">Piauí</option>
        		<option value="rj">Rio de Janeiro</option>
        		<option value="rn">Rio Grande do Norte</option>
        		<option value="ro">Rondônia</option>
        		<option value="rs">Rio Grande do Sul</option>
        		<option value="rr">Roraima</option>
        		<option value="sc">Santa Catarina</option>
        		<option value="se">Sergipe</option>
        		<option value="sp">São Paulo</option>
        		<option value="to">Tocantins</option>
          </select>
        </div>
        <div class="col-xs-4">
          <label>Cidade:</label>
          <input type="text" class="form-control" name="cidade" maxlength="20" >
        </div>

        <div class="col-xs-4">
          <label>Bairro:</label>
          <input type="text" class="form-control" name="bairro" maxlength="30">
        </div>
      </div>
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-block form-control" name="enviar" value="Salvar">
      <input type="reset" class="btn btn-primary btn-block form-control" name="resetar" value="Resetar">
    </div>
  </form>
</div>
