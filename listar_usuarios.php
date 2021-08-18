<?php
include_once("../include/conexao.php");
?>
<table class="table table-striped table-hover">
<thead>
	<tr>
	  <th>#</th>
	  <th>Nome</th>
	  <th>Usuário</th>
	  <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button></th>
</thead>
<tbody>
	<?php

	//consultar no banco de dados
	$result_usuario = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	//Verificar se encontrou resultado na tabela "funcionarios"
	if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
		while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
			?>
				<tr>
			     	<th><?php echo $row_usuario['id_usuario']?></th>
			      	<td><?php echo $row_usuario['nome']?></th></td>
			      	<td><?php echo $row_usuario['usuario']?></th></td>
				    <td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVisu<?php echo $row_usuario['id_usuario'] ?>">V</button>

						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row_usuario['id_usuario']; ?>" data-whatevernome="<?php echo $row_usuario['nome']; ?>" data-whateverusuario="<?php echo $row_usuario['usuario']; ?>">E</button>

						<?php echo "<a href='apagar_funcionarios?id_usuario=" . $row_usuario['id_usuario'] . "'class='btn btn-danger' data-confirm='Tem certeza de que deseja excluir o registro?'>A</a><br><hr>"?>
					</td>
		    	</tr>
			<!-- Inicio Modal Visualizar -->
			<div class="modal" id="myModalVisu<?php echo $row_usuario['id_usuario'] ?>" tabindex="-1">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title"><?php echo $row_usuario['id_usuario']; ?></h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			         			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			      			Nome: <?php echo $row_usuario['nome'] . "<br>";?>
			        		Usuário: <?php echo $row_usuario['usuario'] . "<br>";?>
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


