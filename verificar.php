<?php

include_once("include/conexao.php");


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: logar.php');
	exit();	
}

$login = $_POST['usuario'];
$senha = md5($_POST['senha']);

$stmt = $conn->prepare("select * from usuarios where usuario = ? and senha = ?");
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$result = $stmt->get_result();


if ($row = $result->fetch_assoc()) {
	session_start();
	
	$_SESSION['UsuarioNivel'] = $row['nivel'];
	
	echo "Logado com sucesso!";
	
	if($_SESSION['UsuarioNivel'] == "Administrador"){
	header("location: funcionarios.php");
	
	}else{
	$_SESSION['UsuarioNivel'] == "Funcionário";
	header("location: logar.php");
	}
	

}else{
	echo "Login Inválido!";
}



$stmt->close();


	

?>