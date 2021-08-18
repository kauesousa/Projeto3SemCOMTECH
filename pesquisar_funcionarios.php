<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COMTECH</title>
</head>
<body>
	<?php
		include_once("include/conexao.php");
		include_once("include/modais_funcionario.php");
		include_once("include/menu.php");

	?>

	<table class="table table-striped table-hover">
		<thead>
	    	<tr>
		      <th>#</th>
		      <th>Nome</th>
		      <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button></th>
	  	</thead>
	  	<tbody>
			<?php 
			//consultar no banco de dados
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_funcionario = "SELECT * FROM funcionarios WHERE nome LIKE '%$nome%'";
			$resultado_funcionario = mysqli_query($conn, $result_funcionario);

			//Verificar se encontrou resultado na tabela "funcionarios"
			$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
			if($SendPesqUser){
				while($row_funcionario = mysqli_fetch_assoc($resultado_funcionario)){
					?>
						<tr>
					     	<th><?php echo $row_funcionario['id_funcionario']?></th>
					      	<td><?php echo $row_funcionario['nome']?></th></td>
						    <td>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVisu<?php echo $row_funcionario['id_funcionario'] ?>">Visualizar</button>

								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row_funcionario['id_funcionario']; ?>" data-whatevernome="<?php echo $row_funcionario['nome']; ?>" data-whatevercargo="<?php echo $row_funcionario['cargo']; ?>">Editar</button>

								<?php echo "<a href='apagar_funcionarios?id_funcionario=" . $row_funcionario['id_funcionario'] . "'class='btn btn-danger' data-confirm='Tem certeza de que deseja excluir o registro?'>Apagar</a><br><hr>"?>
							</td>
				    	</tr>

		

			<!-- Inicio Modal Visualizar -->
			<div class="modal" id="myModalVisu<?php echo $row_funcionario['id_funcionario'] ?>" tabindex="-1">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title"><?php echo $row_funcionario['id_funcionario']; ?></h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			         			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			      			Nome: <?php echo $row_funcionario['nome'] . "<br>";?>
			        		Cargo: <?php echo $row_funcionario['cargo'] . "<br>";?>
			      		</div>
			    	</div>
			  	</div>
			  	<script src="personalizado.js"></script>		
			</div>
			<!-- Fim Modal Visualizar -->			
			<?php
				}
			}else{
				echo "Nenhum registro encontrado";
			}

			?>
		</tbody>
	</table>
</body>
</html>




