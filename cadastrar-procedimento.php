<h1>Cadastrar Procedimento</h1>
<form action="?page=salvar-procedimento" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Procedimento</label>
		<input type text="text" name="nome_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Medico Responsável</label>
		<input type text="text" name="medico_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Paciente</label>
		<input type text="text" name="paciente_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data do Procedimento</label>
		<input type="date" name="data_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora do Procedimento</label>
		<input type="time" name="hora_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição do Procedimento</label>
		<input type text="text" name="descricao_procedimento" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>