<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar' :
			$nome_procedimento = $_POST['nome_procedimento'];
			$medico_procedimento = $_POST['medico_procedimento'];
			$paciente_procedimento = $_POST['paciente_procedimento'];
			$data_procedimento = $_POST['data_procedimento'];
			$hora_procedimento = $_POST['hora_procedimento'];
			$descricao_procedimento = $_POST['descricao_procedimento'];

			$sql = "INSERT INTO procedimento (
						nome_procedimento,
						medico_procedimento,
						paciente_procedimento,
						data_procedimento,
						hora_procedimento,
						descricao_procedimento)
					VALUES(
						'{$nome_procedimento}',
						'{$medico_procedimento}',
						'{$paciente_procedimento}',
						'{$data_procedimento}',
						'{$hora_procedimento}',
						'{$descricao_procedimento}')";	
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}
			brake;

		case 'editar':
			$nome_procedimento = $_POST['nome_procedimento'];
			$medico_procedimento = $_POST['medico_procedimento'];
			$paciente_procedimento = $_POST['paciente_procedimento'];
			$data_procedimento = $_POST['data_procedimento'];
			$hora_procedimento = $_POST['hora_procedimento'];
			$descricao_procedimento = $_POST['descricao_procedimento'];

			$sql = "UPDATE procedimento SET
						nome_procedimento='{$nome_procedimento}',
						medico_procedimento='{$medico_procedimento}',
						paciente_procedimento='{$paciente_procedimento}',
						data_procedimento='{$data_procedimento}',
						hora_procedimento='{$hora_procedimento}',
						descricao_procedimento='{$descricao_procedimento}'
					WHERE
						id_procedimento=".$_REQUEST['id_procedimento'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}
			break;
		case 'excluir':
				$sql = "DELETE FROM procedimento
						WHERE id_procedimento=".$_REQUEST['id_procedimento'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-procedimento';</script>";
				}
			break;

	}

