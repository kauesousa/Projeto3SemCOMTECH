<?php
session_start();
include_once("../include/conexao.php");
$id_funcionario = filter_input(INPUT_GET, 'id_funcionario', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_funcionario)){
	$result_apagar = "DELETE FROM funcionarios WHERE id_funcionario='$id_funcionario'";
	$resultado_apagar = mysqli_query($conn, $result_apagar);
	if(mysqli_affected_rows($conn)){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/index.php'>
				<script type=text/javascript\">
					alert(\"Usuário apagado com sucesso!\");
				</script>
			";	
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/ProjProg/index.php'>
				<script type=\"text/javascript\">
					alert(\"Erro, o usuário não foi apagado com sucesso.\");
				</script>
			";
	}
}

