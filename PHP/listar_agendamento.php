<!DOCTYPE HTML>
<html>

	<head>
		<!-- Título da página (aparece na aba) -->
		<title>Lista de Agendamento</title>

		<!-- Metadados -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Javascript -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

	<body class="p-3 mb-2 bg-light text-dark">
	<h4>Tabela de Agendamento</h4><br>

		<?php
		include_once "conexao.php";

		//consultar no banco de dados
		$result_usuario = "SELECT * FROM tb_cadastro ORDER BY id DESC";
		$resultado_usuario = mysqli_query($conn, $result_usuario);


		//Verificar se encontrou resultado na tabela "usuarios"
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){

			?>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Sobrenome</th>
						<th>E-mail</th>
						<th>Celular</th>
						<th>Data Nasc.</th>
						<th>CEP</th>
						<th>Gênero</th>
						<th>Etnia</th>
						<th>Altura</th>
						<th>Peso</th>
						<th>Pergunta1</th>
						<th>Pergunta2</th>
						<th>Pergunta3</th>
						<th>Pergunta4</th>
						<th>Data Agend.</th>
						<th>Hora Atendi.</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
						?>
						<tr>
							<th><?php echo $row_usuario['id']; ?></th>
							<td><?php echo $row_usuario['nome']; ?></td>
							<td><?php echo $row_usuario['sobrenome']; ?></td>
							<th><?php echo $row_usuario['email']; ?></th>
							<td><?php echo $row_usuario['celular']; ?></td>
							<td><?php echo $row_usuario['data_nascimento']; ?></td>
							<th><?php echo $row_usuario['cep']; ?></th>
							<td><?php echo $row_usuario['genero']; ?></td>
							<td><?php echo $row_usuario['sua_etnia']; ?></td>
							<th><?php echo $row_usuario['altura']; ?></th>
							<td><?php echo $row_usuario['peso']; ?></td>
							<td><?php echo $row_usuario['pergunta1']; ?></td>
							<th><?php echo $row_usuario['pergunta2']; ?></th>
							<td><?php echo $row_usuario['pergunta3']; ?></td>
							<td><?php echo $row_usuario['pergunta4']; ?></td>
							<td><?php echo $row_usuario['data_agendamento']; ?></td>
							<td><?php echo $row_usuario['hora_atendimento']; ?></td>
						</tr>
						<?php
					}?>
				</tbody>
			</table>
		<?php

		}else{
			echo "<div class='alert alert-danger' role='alert'>Nenhum agendamento encontrado!</div>";
		}
		?>

	</body>

	<br><br>
	<div align="center">
    		<a href="http://localhost/vaccination-form" class="botao3" target="_blank">
    		<img width="100" height="100" src="http://localhost/vaccination-form/IMAGENS/busca_lista.jpg"></a>
    	</div><br>
    	<h6 id="titulo" align="center">Voltar Para A Página Inicial</h6>
</html>