<!DOCTYPE html>
<html>
<head>
	<title>COMTECH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>

		h1{
			text-align: center;
			font-family: Arial;
			font-size: 20px;
			color: #fff;
		}

		#btnConsultoria{
			left: 45%;
			top: 10px;
			position: relative;
			margin-bottom: 150px;
		}


	</style>
<body>
	<?php
		include_once("include/menu_produtos.php");
		include_once("include/conexao.php");
		include_once("include/slider.php");
	?>

		<h1>Agende uma consultoria conosco, entraremos em contato em até 24h!</h1>
		<button type="button" class="btn btn-primary" id="btnConsultoria" data-toggle="modal" data-target="#myModalConsultoria">AGENDAR</button></th>

		<!-- Inicio modal Consultoria -->
		<div class="modal fade" id="myModalConsultoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<h4 class="modal-title text-center" id="myModalLabel">Consultoria</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form method="POST" action="cadastrar/registrar_consultoria" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nome" class="control-label">Nome</label>
								<input name="nome" id="nome" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="email" class="control-label">E-mail</label>
								<input name="email" id="email" type="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="celular" class="control-label">Celular</label>
								<input name="celular" id="celular" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="mensagem" class="control-label">Mensagem</label>
           						<textarea class="form-control" name="mensagem" id="mensagem"></textarea>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Fim -->
</body>
</html>