<h1>Cadastrar Medico</h1>
<form action="?page=salvar-medico" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type text="text" name="nome_medico" class="form-control">
	</div>
	<div class="mb-3">
		<label>CRM</label>
		<input type text="text" name="crm_medico" class="form-control">
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type text="text" name="especialidade_medico" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>