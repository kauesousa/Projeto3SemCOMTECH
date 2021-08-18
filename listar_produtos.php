<?php
include_once("../include/conexao.php");
?>
<table class="table table-striped table-hover">
<thead>
	<tr>
	  <th>#</th>
	  <th>Nome</th>
	  <th>Descrição</th>
	  <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button></th>
</thead>
<tbody>
	<?php

	//consultar no banco de dados
	$result_produto = "SELECT * FROM produtos ORDER BY id_produto DESC";
	$resultado_produto = mysqli_query($conn, $result_produto);

	//Verificar se encontrou resultado na tabela "funcionarios"
	if(($resultado_produto) AND ($resultado_produto->num_rows != 0)){
		while($row_produto = mysqli_fetch_assoc($resultado_produto)){
			?>
				<tr>
			     	<th><?php echo $row_produto['id_produto']?></th>
			      	<td><?php echo $row_produto['nome_produto']?></th></td>
			      	<td><?php echo $row_produto['descricao']?></th></td>
				    <td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVisu<?php echo $row_produto['id_produto'] ?>">V</button>

						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row_produto['id_produto']; ?>" data-whateverproduto="<?php echo $row_produto['nome_produto']; ?>" data-whateverdescricao="<?php echo $row_produto['descricao']; ?>" data-whateverfoto="<?php echo $row_produto['foto']; ?>">E</button>

						<?php echo "<a href='apagar_funcionarios?id_produto=" . $row_produto['id_produto'] . "'class='btn btn-danger' data-confirm='Tem certeza de que deseja excluir o registro?'>A</a><br><hr>"?>
					</td>
		    	</tr>
			<!-- Inicio Modal Visualizar -->
			<div class="modal" id="myModalVisu<?php echo $row_produto['id_produto'] ?>" tabindex="-1">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title"><?php echo $row_produto['id_produto']; ?></h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			         			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			      			Nome: <?php echo $row_produto['nome_produto'] . "<br>";?>
			        		Descrição: <?php echo $row_produto['descricao'] . "<br>";?>
			        		Foto: <?php echo $row_produto['foto'] . "<br>";?>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Fim Modal Visualizar -->
			<script src="js/personalizado.js"></script>		

					
			<?php
		}
	}else{
		echo "Nenhum registro encontrado";
	}

		?>
</tbody>
</table>


