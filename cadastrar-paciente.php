<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type text="text" name="nome_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type text="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type text="text" name="fone_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type text="text" name="email_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type text="text" name="endereci_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Sexo</label>
		<input type text="text" name="sexo_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>