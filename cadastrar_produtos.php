<?php
	include_once("../include/conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
	$foto = $_FILES['arquivo']['name'];
	$destino = 'Fotos//' . $foto;
 

	$result_produto = "INSERT INTO produtos (nome_produto, descricao, foto) VALUES ('$nome', '$descricao', '$foto')";	
	$resultado_produto = mysqli_query($conn, $result_produto);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/produtosTabela.php'>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/produtosTabela.php'>
				<script type=\"text/javascript\">
					alert(\"Produto não foi cadastrado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close();?>