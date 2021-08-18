<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo/estilo3.css">
</head>
<body>
	<input type="checkbox" id="bt_menu">
	<label for="bt_menu">&#9776</label>

	<nav class="menu">
			<ul>
				<li><a href="produtosTabela.php">Produtos</a></li>
				<li><a href="usuarios.php">Usuários</a></li>
				<li><a href="funcionarios.php">Funcionários</a></li>
				<li><a href="consultoria.php">Consultoria</a></li>
				<li><a href="divulgue.php">Divulgue</a></li>
				<li><a href="logout.php">SAIR</a></li>


			</ul>
			<img class="imgLogo" src="simbolo.png">
	</nav>
	<form method="POST" class="inputPesquisar" action="pesquisar_funcionarios.php">
		<input type="text" name="nome" placeholder="busque aqui">
		<input name="SendPesqUser" type="submit">
	</form><br><br>

	
</body>
</html>


