<?php
session_start();
include_once("../include/conexao.php");
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_usuario)){
	$result_apagar = "DELETE FROM usuarios WHERE id_usuario='$id_usuario'";
	$resultado_apagar = mysqli_query($conn, $result_apagar);
	if(mysqli_affected_rows($conn)){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/usuarios.php'>
				<script type=text/javascript\">
					alert(\"Usuário apagado com sucesso!\");
				</script>
			";	
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/usuarios.php'>
				<script type=\"text/javascript\">
					alert(\"Erro, o usuário não foi apagado com sucesso.\");
				</script>
			";
	}
}

