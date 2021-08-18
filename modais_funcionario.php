<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<!-- Inicio Modal Cadastrar -->
	<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
						<h4 class="modal-title text-center" id="myModalLabel">Cadastrar Funcionário</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="cadastrar/cadastrar_funcionarios" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nome" class="control-label">Nome</label>
							<input name="nome" id="nome" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="cargo" class="control-label">Cargo</label>
							<input name="cargo" id="cargo" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="rg" class="control-label">RG</label>
							<input name="rg" id="rg" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="cpf" class="control-label">CPF</label>
							<input name="cpf" id="cpf" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="dataNasc" class="control-label">Data de Nascimento</label>
							<input name="dataNasc" id="dataNasc" type="date" class="form-control">
						</div>
						<div class="form-group">
							<label for="estados" class="control-label">Estado</label><br>
							<select name="estados" id="estados">
							<?php
								$conexao = new PDO("mysql:host=localhost;dbname=comtech", "root","");
								$conexao->exec('SET CHARACTER SET utf8');
								$select = $conexao->prepare("SELECT * FROM estados ORDER BY nome ASC");
								$select->execute();
								$fetchAll = $select->fetchAll();
								foreach($fetchAll as $estados){
									echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label for="cidades" class="control-label">Cidade</label><br>
							<select name="cidades" id="cidades" style="display:none">
							</select>
						</div>	
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Cadastrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Fim Modal Cadastrar -->
		
	<!-- Início Modal Editar -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
	  			<div class="modal-header">
		    		<h5 class="modal-title" id="exampleModalLabel">Funcionários</h5>
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		      			<span aria-hidden="true">&times;</span>
		    		</button>
	  			</div>
			  	<div class="modal-body">
			  		<form method="POST" action="editar/editar_funcionarios.php" enctype="multipart/form-data">
			      		<div class="form-group">
			       			<label for="recipientNome" class="col-form-label">Nome</label>
			        		<input name="nome" type="text" class="form-control" id="recipientNome">
			      		</div>
			      		<div class="form-group">
			        		<label for="recipientCargo" class="col-form-label">Cargo:</label>
			        		<input name="cargo" type="text" class="form-control" id="recipientCargo">
			      		</div>
			      		<div class="form-group">
							<label for="recipientRG" class="control-label">RG:</label>
							<input name="rg" id="recipientRG" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="recipientCPF" class="control-label">CPF:</label>
							<input name="cpf" id="recipientCPF" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="recipientDataNasc" class="control-label">Data de Nascimento:</label>
							<input name="dataNasc" id="recipientDataNasc" type="date" class="form-control">
						</div>
						<div class="form-group">
							<label for="recipientEstados" class="control-label">Estado</label><br>
							<select name="estados" id="recipientEstados">
							<?php
								$conexao = new PDO("mysql:host=localhost;dbname=comtech", "root","");
								$conexao->exec('SET CHARACTER SET utf8');
								$select = $conexao->prepare("SELECT * FROM estados ORDER BY nome ASC");
								$select->execute();
								$fetchAll = $select->fetchAll();
								foreach($fetchAll as $estados){
									echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label for="recipientCidades" class="control-label">Cidade</label><br>
							<select name="cidades" id="recipientCidades" style="display:none">
							</select>
						</div>		
			      		<input name="id" type="hidden" id="idFuncionario">
			      		<div class="modal-footer">
					    	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					    	<button type="submit" class="btn btn-success">Alterar</button>
			  			</div>
			    	</form>
			  	</div>
			</div>
		</div>
	</div>
	<!-- Fim Modal Editar -->

	<!-- SCRIPT PARA EDITAR OS CAMPOS -->
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientNome = button.data('whatevernome') 
		  var recipientCargo = button.data('whatevercargo')
		  var recipientRG = button.data('whateverrg')
		  var recipientCPF = button.data('whatevercpf')
		  var recipientDataNasc = button.data('whateverdatanasc')
		  var recipientEstados = button.data('whateverestados')
		  var recipientCidades = button.data('whatevercidades')
		
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID do Funcionário ' + recipient)
		  modal.find('#idFuncionario').val(recipient)
		  modal.find('#recipientNome').val(recipientNome)
		  modal.find('#recipientCargo').val(recipientCargo)
		  modal.find('#recipientRG').val(recipientRG)
		  modal.find('#recipientCPF').val(recipientCPF)
		  modal.find('#recipientDataNasc').val(recipientDataNasc)
		  modal.find('#recipientEstados').val(recipientEstados)
		  modal.find('#recipientCidades').val(recipientCidades)
	
		})	
	</script>

	<script>
		$("#estados").on("change", function(){
			var idEstado = $("#estados").val();

			$.ajax({
				url: 'pega_cidades.php',
				type: 'POST',
				data:{id:idEstado},
				beforeSend: function(){
					$("#cidades").css({'display':'block'});
					$("#cidades").html("Carregando...");
				},
				success: function(data){
					$("#cidades").css({'display':'block'});
					$("#cidades").html(data);
				},
				error: function(data){
					$("#cidades").css({'display':'block'});
					$("#cidades").html("Houve um erro ao carregar");
				}
			});
		});
	</script>

	<script>
		$("#recipientEstados").on("change", function(){
			var idEstado = $("#recipientEstados").val();

			$.ajax({
				url: 'pega_cidades.php',
				type: 'POST',
				data:{id:idEstado},
				beforeSend: function(){
					$("#recipientCidades").css({'display':'block'});
					$("#recipientCidades").html("Carregando...");
				},
				success: function(data){
					$("#recipientCidades").css({'display':'block'});
					$("#recipientCidades").html(data);
				},
				error: function(data){
					$("#recipientCidades").css({'display':'block'});
					$("#recipientCidades").html("Houve um erro ao carregar");
				}
			});
		});
	</script>

	<script src="js/personalizado.js"></script>


</body>
</html>


	