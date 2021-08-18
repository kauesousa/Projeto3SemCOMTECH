<?php
session_start();
include_once("../include/conexao.php");
$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_produto)){
	$result_apagar = "DELETE FROM produtos WHERE id_produto='$id_produto'";
	$resultado_apagar = mysqli_query($conn, $result_apagar);
	if(mysqli_affected_rows($conn)){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/usuarios.php'>
				<script type=text/javascript\">
					alert(\"Produto apagado com sucesso!\");
				</script>
			";	
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/usuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Erro, o produto não foi apagado com sucesso.\");
				</script>
			";
	}
}

