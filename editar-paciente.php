<h1>Editar Paciente</h1>
<?php
	$sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_paciente" Value="<?php print $row->nome_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" Value="<?php print $row->cpf_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="fone_paciente" Value="<?php print $row->fone_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="text" name="email_paciente" Value="<?php print $row->email_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_paciente" Value="<?php print $row->dt_nasc_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereci_paciente" Value="<?php print $row->endereci_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Sexo</label>
		<input type="text" name="sexo_paciente" Value="<?php print $row->sexo_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>