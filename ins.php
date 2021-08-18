<?php
	include_once("../include/conexao.php");
?>

<?php

	$nome = $_POST['nome_produto'];
	$preco = $_POST['descricao'];
	$quantidade = $_POST['sobre'];


    $foto = $_FILES['arquivo']['name'];
	$destino = 'Fotos//' . $foto;
 
	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	 
	move_uploaded_file( $arquivo_tmp, $destino  );
	

	$sql = "INSERT INTO produtos VALUES (null, '$nome', '$preco', '$quantidade', '$foto');";
	$conn->query($sql);

	$conn->close();

	header("location: ../produtos.php");
?>