<!DOCTYPE html>
<html>
<head>
	<title>COMTECH Usuários</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include_once("include/menu.php");
	?>

	<h2 class="h2ListarFunc">Produtos</h2>
	<span id="conteudo"></span>

	<script>
		$(document).ready(function () {
			$.post('listar/listar_divulgacao.php', function(retorna){
				//Subtitui o valor no seletor id="conteudo"
				$("#conteudo").html(retorna);
			});
		});
	</script>

</body>
</html>