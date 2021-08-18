<?php
	include_once("../include/conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
	$rg = mysqli_real_escape_string($conn, $_POST['rg']);
	$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$dataNasc = mysqli_real_escape_string($conn, $_POST['dataNasc']);
	$estado = mysqli_real_escape_string($conn, $_POST['estados']);
	$cidade = mysqli_real_escape_string($conn, $_POST['cidades']);
	

	$result_cadastro = "INSERT INTO funcionarios (nome, cargo, rg, cpf, dataNasc, estado, cidade) VALUES ('$nome', '$cargo', '$rg', '$cpf', '$dataNasc', '$estado', '$cidade')";	
	$resultado_cadastro = mysqli_query($conn, $result_cadastro);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/index.php'>
				<script type=\"text/javascript\">
					alert(\"Funcionário cadastrado com Sucesso!\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/index.php'>
				<script type=\"text/javascript\">
					alert(\"Funcionário não foi cadastrado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close();?>