<!DOCTYPE HTML>
<html lang="pt-br">  
<head>  
	<meta charset="utf-8">
	<title>COMTECH</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>

	<?php
		session_start();
		include_once("include/menu.php");
		include_once("include/modais_funcionario.php");

		if(isset($_SESSION["UsuarioNivel"]) && $_SESSION["UsuarioNivel"] == "Administrador"){

			echo '<h2 class="h2ListarFunc">Funcionários</h2>
			<span id="conteudo"></span>

			<script>
				$(document).ready(function () {
					$.post("listar/listar_funcionarios.php", function(retorna){
						//Subtitui o valor no seletor id="conteudo"
						$("#conteudo").html(retorna);
					});
				});
			</script>
			}';
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/logar.php'>";	
		}
	?>
</body>
</html>
