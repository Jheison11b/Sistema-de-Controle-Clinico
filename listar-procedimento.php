<h1>Listar Procedimento</h1>
<?php
	$sql = "SELECT * FROM procedimento";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";	
		print "<th>Nome do Procedimento</th>";	
		print "<th>Medico Responsável</th>";	
		print "<th>Paciente</th>";
		print "<th>Data do Procedimento</th>";	
		print "<th>Hora do Procedimento</th>";	
		print "<th>Descrição do Procedimento</th>";	
		print "<th>Ações</th>";	
		print "</tr>";	
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_procedimento."</td>";	
			print "<td>".$row->nome_procedimento."</td>";
			print "<td>".$row->medico_procedimento."</td>";
			print "<td>".$row->paciente_procedimento."</td>";
			print "<td>".$row->data_procedimento."</td>";	
			print "<td>".$row->hora_procedimento."</td>";
			print "<td>".$row->descricao_procedimento."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-procedimento&id_procedimento=".$row->id_procedimento."';\">Editar</button>
					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-procedimento&acao=excluir&id_procedimento=".$row->id_procedimento."';}else{false}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}