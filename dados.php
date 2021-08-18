<html>
<head>
	<title>COMTECH</title>
	<style>

		body{

		}

		.tudobem{
			color: #fff;
			width: 500px;
			text-align: justify;
			font-family: Arial;
			left: 45%;
			top: -300px;
			position: relative;
			font-size: 18px;
		}

		.imgInfo{
			left: 20%;
			position: relative;
			width: 300px;
			height: 300px;
		}

		.maisInfos{
			margin-top: 40px;
			position: absolute;
			left: 1%;
			background-color: #ffc107;
			text-decoration: none;
			padding: 20px;
			color: #000;
		}

	</style>
</head>
<body>
	<?php
		include_once("include/menu_produtos.php");
		include_once("include/conexao.php");
		include_once("include/slider.php");
	?>
	<?php
		if(isset($_GET['id_produto'])){

			$sql = "SELECT * FROM produtos WHERE id_produto =".$_GET['id_produto'];
			$result = $conn->query($sql);

			if ($row = $result->fetch_assoc()) {
			   	echo "<div class='cprod'";
			   	echo "<h1></h1>";
		     	echo "<img class='imgInfo' src='Fotos//".$row["foto"]."'/>","</br><br>";
		     	echo "<p class='tudobem' style='color: #28a745;'>".$row["nome_produto"],'</p>',"</br>";
		        echo "<p class='tudobem'>".$row["descricao"],"</p>","</br>";
		        echo "<p class='tudobem'>".$row["sobre"],"</p","</br>";
		        echo "<a class='maisInfos' href='dados.php?id_produto=".$row["id_produto"]."'>AGENDAR CONSULTORIA!</a>";
		        echo "</div>";
			}else {
			    echo "Erro! Não existe esse produto!";
			}
			$conn->close();
	}
	?>
</body>
</html>