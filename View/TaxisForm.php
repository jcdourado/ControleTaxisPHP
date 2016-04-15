<form class="" method="post">
  <label>Nome:</label>
  <input id="campoNome"type="text" name="nome" maxlength="30" value="<?php echo @$taxi['NOME']; ?>" >
  <?php if(@$erros['NOME']) echo "<span>{$erros['NOME']}</span>"; ?>

  <label>Placa:</label>
  <input type="text" name="placa" maxlength="8" value="<?php echo @$taxi['PLACA']; ?>" >
  <?php if(@$erros['PLACA']) echo "<span>{$erros['PLACA']}</span>"; ?>

  <label>Estado:</label>
  <select class="" name="estado">
		<option value="no" >Selecione o Estado</option>
		<option value="ac" <?php if(@$taxi['ESTADO'] == 'ac' ){ echo "selected";} ?> >Acre</option>
		<option value="al" <?php if(@$taxi['ESTADO'] == 'al' ){ echo "selected";} ?> >Alagoas</option>
		<option value="am" <?php if(@$taxi['ESTADO'] == 'am' ){ echo "selected";} ?> >Amazonas</option>
		<option value="ap" <?php if(@$taxi['ESTADO'] == 'ap' ){ echo "selected";} ?> >Amapá</option>
		<option value="ba" <?php if(@$taxi['ESTADO'] == 'ba' ){ echo "selected";} ?> >Bahia</option>
		<option value="ce" <?php if(@$taxi['ESTADO'] == 'ce' ){ echo "selected";} ?> >Ceará</option>
		<option value="df" <?php if(@$taxi['ESTADO'] == 'df' ){ echo "selected";} ?> >Distrito Federal</option>
		<option value="es" <?php if(@$taxi['ESTADO'] == 'es' ){ echo "selected";} ?> >Espírito Santo</option>
		<option value="go" <?php if(@$taxi['ESTADO'] == 'go' ){ echo "selected";} ?> >Goiás</option>
		<option value="ma" <?php if(@$taxi['ESTADO'] == 'ma' ){ echo "selected";} ?> >Maranhão</option>
		<option value="mt" <?php if(@$taxi['ESTADO'] == 'mt' ){ echo "selected";} ?> >Mato Grosso</option>
		<option value="ms" <?php if(@$taxi['ESTADO'] == 'ms' ){ echo "selected";} ?> >Mato Grosso do Sul</option>
		<option value="mg" <?php if(@$taxi['ESTADO'] == 'mg' ){ echo "selected";} ?> >Minas Gerais</option>
		<option value="pa" <?php if(@$taxi['ESTADO'] == 'pa' ){ echo "selected";} ?> >Pará</option>
		<option value="pb" <?php if(@$taxi['ESTADO'] == 'pb' ){ echo "selected";} ?> >Paraíba</option>
		<option value="pr" <?php if(@$taxi['ESTADO'] == 'pr' ){ echo "selected";} ?> >Paraná</option>
		<option value="pe" <?php if(@$taxi['ESTADO'] == 'pe' ){ echo "selected";} ?> >Pernambuco</option>
		<option value="pi" <?php if(@$taxi['ESTADO'] == 'pi' ){ echo "selected";} ?> >Piauí</option>
		<option value="rj" <?php if(@$taxi['ESTADO'] == 'rj' ){ echo "selected";} ?> >Rio de Janeiro</option>
		<option value="rn" <?php if(@$taxi['ESTADO'] == 'rn' ){ echo "selected";} ?> >Rio Grande do Norte</option>
		<option value="ro" <?php if(@$taxi['ESTADO'] == 'ro' ){ echo "selected";} ?> >Rondônia</option>
		<option value="rs" <?php if(@$taxi['ESTADO'] == 'rs' ){ echo "selected";} ?> >Rio Grande do Sul</option>
		<option value="rr" <?php if(@$taxi['ESTADO'] == 'rr' ){ echo "selected";} ?> >Roraima</option>
		<option value="sc" <?php if(@$taxi['ESTADO'] == 'sc' ){ echo "selected";} ?> >Santa Catarina</option>
		<option value="se" <?php if(@$taxi['ESTADO'] == 'se' ){ echo "selected";} ?> >Sergipe</option>
		<option value="sp" <?php if(@$taxi['ESTADO'] == 'sp' ){ echo "selected";} ?> >São Paulo</option>
		<option value="to" <?php if(@$taxi['ESTADO'] == 'to' ){ echo "selected";} ?> >Tocantins</option>
  </select>

  <label>Cidade:</label>
  <input type="text" name="cidade" maxlength="20" value="<?php echo @$taxi['CIDADE']; ?>">

  <label>Bairro:</label>
  <input type="text" name="bairro" maxlength="30" value="<?php echo @$taxi['BAIRRO']; ?>">

  <input type="submit" name="enviar" value="Salvar">
  <input type="reset" name="resetar" value="Resetar">
</form>
