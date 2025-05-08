<h1>Editar Consulta</h1>
<?php
	$sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_consulta" value="<?php print $row->id_consulta; ?>">
	<div class="mb-3">
		<label>Data da Consulta</label>
		<input type="date" name="data_consulta" Value="<?php print $row->data_consulta; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora da Consulta</label>
		<input type="time" name="hora_consulta" Value="<?php print $row->hora_consulta; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição da Consulta</label>
		<input type="text" name="descricao_consulta" Value="<?php print $row->descricao_consulta; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>