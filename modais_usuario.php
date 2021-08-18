<!-- Inicio Modal Cadastrar -->
<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Cadastrar Usuário</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form method="POST" action="cadastrar/cadastrar_funcionarios" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nome" class="control-label">Nome:</label>
						<input name="nome" id="nome" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="cargo" class="control-label">Cargo:</label>
						<input name="cargo" id="cargo" type="text" class="form-control">
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
		  		<form method="POST" action="editar/editar_usuarios.php" enctype="multipart/form-data">
		      		<div class="form-group">
		       			<label for="recipientNome" class="col-form-label">Nome</label>
		        		<input name="nome" type="text" class="form-control" id="recipientNome">
		      		</div>
		      		<div class="form-group">
		        		<label for="recipientUsuario" class="col-form-label">Usuário:</label>
		        		<input name="cargo" type="text" class="form-control" id="recipientUsuario">
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
	  var recipientUsuario = button.data('whateverusuario')
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('ID do Usuário ' + recipient)
	  modal.find('#idUsuario').val(recipient)
	  modal.find('#recipientNome').val(recipientNome)
	  modal.find('#recipientUsuario').val(recipientUsuario)
	})	
</script>

<script src="../js/personalizado.js"></script>