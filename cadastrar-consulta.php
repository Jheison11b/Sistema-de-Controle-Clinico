<h1>Cadastrar Consulta</h1>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Data da Consulta</label>
		<input type="date" name="data_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora da Consulta</label>
		<input type="time" name="hora_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição da Consulta</label>
		<input type text="text" name="descricao_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>