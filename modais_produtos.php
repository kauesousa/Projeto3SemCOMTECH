<!-- Inicio Modal Cadastrar -->
<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Cadastrar Produto</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form method="POST" action="cadastrar/cadastrar_produtos" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nome" class="control-label">Produto:</label>
						<input name="nome" id="nome" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="descricao" class="control-label">Descrição:</label>
						<input name="descricao" id="descricao" type="text" class="form-control">
					</div>
					Selecione uma imagem: <input name="arquivo" type="file" /><br/>
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
	    		<h5 class="modal-title" id="exampleModalLabel">Produtos</h5>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      			<span aria-hidden="true">&times;</span>
	    		</button>
  			</div>
		  	<div class="modal-body">
		  		<form method="POST" action="editar/editar_produtos.php" enctype="multipart/form-data">
		      		<div class="form-group">
		       			<label for="recipientProduto" class="col-form-label">Produto</label>
		        		<input name="nome" type="text" class="form-control" id="recipientProduto">
		      		</div>
		      		<div class="form-group">
		        		<label for="recipientDescricao" class="col-form-label">Descrição:</label>
		        		<input name="descricao" type="text" class="form-control" id="recipientDescricao">
		      		</div>
					Selecione uma imagem: <input name="arquivo" type="file" /><br/>
		      		<input name="id_produto" type="hidden" id="idProd">
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
	  var recipientProduto = button.data('whateverproduto') 
	  var recipientDescricao = button.data('whateverdescricao')
	  var recipientFoto = button.data('whateverfoto')
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('ID do Produto ' + recipient)
	  modal.find('#idProd').val(recipient)
	  modal.find('#recipientProduto').val(recipientProduto)
	  modal.find('#recipientDescricao').val(recipientDescricao)
	  modal.find('#recipientFoto').val(recipientFoto)
	})	
</script>

<script src="../js/personalizado.js"></script>