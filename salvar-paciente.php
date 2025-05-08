<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar' :
			$nome_paciente = $_POST['nome_paciente'];
			$cpf = $_POST['cpf_paciente'];
			$fone = $_POST['fone_paciente'];
			$email = $_POST['email_paciente'];
			$dt_nasc = $_POST['dt_nasc_paciente'];
			$endereco = $_POST['endereci_paciente'];
			$sexo = $_POST['sexo_paciente'];

			$sql = "INSERT INTO paciente (
						nome_paciente,
						cpf_paciente,
						fone_paciente,
						email_paciente,
						dt_nasc_paciente,
						endereci_paciente,
						sexo_paciente)
					VALUES(
						'{$nome_paciente}',
						'{$cpf}',
						'{$fone}',
						'{$email}',
						'{$dt_nasc}',
						'{$endereco}',
						'{$sexo}')";	
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}
			brake;

		case 'editar':
			$nome_paciente = $_POST['nome_paciente'];
			$cpf = $_POST['cpf_paciente'];
			$fone = $_POST['fone_paciente'];
			$email = $_POST['email_paciente'];
			$dt_nasc = $_POST['dt_nasc_paciente'];
			$endereco = $_POST['endereci_paciente'];
			$sexo = $_POST['sexo_paciente'];

			$sql = "UPDATE paciente SET
						nome_paciente='{$nome_paciente}',
						cpf_paciente='{$cpf}',
						fone_paciente='{$fone}',
						email_paciente='{$email}',
						dt_nasc_paciente='{$dt_nasc}',
						endereci_paciente='{$endereco}',
						sexo_paciente='{$sexo}'
					WHERE
						id_paciente=".$_REQUEST['id_paciente'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}
			break;
		case 'excluir':
				$sql = "DELETE FROM paciente
						WHERE id_paciente=".$_REQUEST['id_paciente'];
						

				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-paciente';</script>";
				}
			break;

	}

