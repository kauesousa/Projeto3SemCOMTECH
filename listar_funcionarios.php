<!DOCTYPE html>
<html>
<head>
	<style>
		.pVisualizar{
			color: #000;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<?php
	session_start();
	include_once("../include/conexao.php");
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
	$result_funcionario = "SELECT * FROM funcionarios ORDER BY id_funcionario DESC";
	$resultado_funcionario = mysqli_query($conn, $result_funcionario);

	//Verificar se encontrou resultado na tabela "funcionarios"
	if(($resultado_funcionario) AND ($resultado_funcionario->num_rows != 0)){
		while($row_funcionario = mysqli_fetch_assoc($resultado_funcionario)){
			?>
				<tr>
			     	<th><?php echo $row_funcionario['id_funcionario']?></th>
			      	<td><?php echo $row_funcionario['nome']?></th></td>
				    <td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVisu<?php echo $row_funcionario['id_funcionario'] ?>">V</button>

						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row_funcionario['id_funcionario']; ?>" data-whatevernome="<?php echo $row_funcionario['nome']; ?>" data-whatevercargo="<?php echo $row_funcionario['cargo']; ?>" data-whateverrg="<?php echo $row_funcionario['rg']; ?>" data-whatevercpf="<?php echo $row_funcionario['cpf']; ?>" data-whateverdatanasc="<?php echo $row_funcionario['dataNasc']; ?>" data-whateverestados="<?php echo $row_funcionario['estado']; ?>" data-whatevercidades="<?php echo $row_funcionario['cidade']; ?>">E</button>

						<?php echo "<a href='apagar/apagar_funcionarios?id_funcionario=" . $row_funcionario['id_funcionario'] . "'class='btn btn-danger' data-confirm='Tem certeza de que deseja excluir o registro?'>A</a><br><hr>"?>
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
	      			<p class="pVisualizar">Nome<p><?php echo $row_funcionario['nome'];?>
	        		<p class="pVisualizar">Cargo<p> <?php echo $row_funcionario['cargo'] . "<br>";?>
	        		<p class="pVisualizar">RG<p> <?php echo $row_funcionario['rg'] . "<br>";?>
	        		<p class="pVisualizar">CPF<p> <?php echo $row_funcionario['cpf'] . "<br>";?>
	        		<p class="pVisualizar">Data de Nascimento<p> <?php echo $row_funcionario['dataNasc'] . "<br>";?>
	        		<p class="pVisualizar">Estado<p> <?php echo $row_funcionario['estado'] . "<br>";?>
	        		<p class="pVisualizar">Cidade<p> <?php echo $row_funcionario['cidade'] . "<br>";?>
	      		</div>
	    	</div>
	  	</div>
	  	<script src="js/personalizado.js"></script>		
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
