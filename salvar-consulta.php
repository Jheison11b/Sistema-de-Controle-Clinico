<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar' :
			$data_consulta = $_POST['data_consulta'];
			$hora_consulta = $_POST['hora_consulta'];
			$descricao_consulta = $_POST['descricao_consulta'];

			$sql = "INSERT INTO consulta (
						data_consulta,
						hora_consulta,
						descricao_consulta)
					VALUES(
						'{$data_consulta}',
						'{$hora_consulta}',
						'{$descricao_consulta}')";	
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}
			brake;

		case 'editar':
			$data_consulta = $_POST['data_consulta'];
			$hora_consulta = $_POST['hora_consulta'];
			$descricao_consulta = $_POST['descricao_consulta'];

			$sql = "UPDATE consulta SET
						data_consulta='{$data_consulta}',
						hora_consulta='{$hora_consulta}',
						descricao_consulta='{$descricao_consulta}'
					WHERE
						id_consulta=".$_REQUEST['id_consulta'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}
			break;
		case 'excluir':
				$sql = "DELETE FROM consulta
						WHERE id_consulta=".$_REQUEST['id_consulta'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-consulta';</script>";
				}
			break;

	}

