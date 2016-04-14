<form class="" method="post">
  <label>Nome:</label>
  <input type="text" name="nome" maxlength="30" required>

  <label>Placa:</label>
  <input type="text" name="placa" maxlength="8" required>

  <label>Estado:</label>
  <select class="" name="estado">
		<option value="estado">Selecione o Estado</option>
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

  <label>Cidade:</label>
  <input type="text" name="cidade" maxlength="20" >

  <label>Bairro:</label>
  <input type="text" name="bairro" maxlength="30" >

  <input type="submit" name="enviar" value="Enviar">
  <input type="reset" name="resetar" value="Resetar">
</form>
