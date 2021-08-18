<?php
include_once("../include/conexao.php");
?>
<table class="table table-striped table-hover">
<thead>
	<tr>
	  <th>#</th>
	  <th>Mensagem</th>
	  <th>Status</th>
</thead>
<tbody>
	<?php

	//consultar no banco de dados
	$result_consultoria = "SELECT * FROM consultoria ORDER BY id_consultoria DESC";
	$resultado_consultoria = mysqli_query($conn, $result_consultoria);

	//Verificar se encontrou resultado na tabela "funcionarios"
	if(($resultado_consultoria) AND ($resultado_consultoria->num_rows != 0)){
		while($row_consultoria = mysqli_fetch_assoc($resultado_consultoria)){
			?>
				<tr>
			     	<th><?php echo $row_consultoria['id_consultoria']?></th>
				      	<td><?php echo $row_consultoria['mensagem']?></th></td>
			      	<td>
			      		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVisu<?php echo $row_consultoria['id_consultoria'] ?>">V</button>
			      	</td>
		    	</tr>
			<!-- Inicio Modal Visualizar -->
			<div class="modal" id="myModalVisu<?php echo $row_consultoria['id_consultoria'] ?>" tabindex="-1">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title"><?php echo $row_consultoria['id_consultoria']; ?></h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			         			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			      			Nome: <?php echo $row_consultoria['nome'] . "<br>";?>
			        		E-mail: <?php echo $row_consultoria['email'] . "<br>";?>
			        		Celular: <?php echo $row_consultoria['celular'] . "<br>";?>
			        		Mensagem: <?php echo $row_consultoria['mensagem'] . "<br>";?>
			      		</div>
			    	</div>
			  	</div>
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


