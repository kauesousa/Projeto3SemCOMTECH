<?php
	include_once("../include/conexao.php");
	$id_produto = mysqli_real_escape_string($conn, $_POST['id_produto']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
	$foto = $_FILES['arquivo']['name'];
	$destino = 'Fotos//' . $foto;
 
	$result_editar = "UPDATE produtos SET nome_produto='$nome', descricao='$descricao', foto='$foto' WHERE id_produto = '$id_produto'";
	$resultado_editar = mysqli_query($conn, $result_editar);
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
			";	
		}?>

	</body>
</html>
<?php $conn->close();?>