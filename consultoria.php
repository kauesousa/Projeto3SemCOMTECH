<!DOCTYPE HTML>
<html lang="pt-br">  
<head>  
	<meta charset="utf-8">
	<title>COMTECH</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<?php
		include_once("include/menu.php");
	?>

	<h2 class="h2ListarFunc">Registros</h2>
	<span id="conteudo"></span>

	<script>
		$(document).ready(function () {
			$.post('listar/listar_consultoria.php', function(retorna){
				//Subtitui o valor no seletor id="conteudo"
				$("#conteudo").html(retorna);
			});
		});
	</script>
</body>
</html>
