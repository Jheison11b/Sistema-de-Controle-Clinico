<h1>Editar Procedimento</h1>
<?php
	$sql = "SELECT * FROM procedimento WHERE id_procedimento=".$_REQUEST['id_procedimento'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-procedimento" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_procedimento" value="<?php print $row->id_procedimento; ?>">
	<div class="mb-3">
		<label>Procedimento</label>
		<input type="text" name="nome_procedimento" Value="<?php print $row->nome_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Medico Responsável</label>
		<input type="text" name="medico_procedimento" Value="<?php print $row->medico_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Paciente</label>
		<input type="text" name="paciente_procedimento" Value="<?php print $row->paciente_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data do Procedimento</label>
		<input type="date" name="data_procedimento" Value="<?php print $row->data_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora do Procedimento</label>
		<input type="time" name="hora_procedimento" Value="<?php print $row->hora_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição do Procedimento</label>
		<input type="text" name="descricao_procedimento" Value="<?php print $row->descricao_procedimento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>