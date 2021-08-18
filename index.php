<!DOCTYPE html>
<html>
<head>
	<title>COMTECH</title>
<body>
	<?php
		include_once("include/menu_produtos.php");
		include_once("include/conexao.php");
		include_once("include/slider.php");
	?>
		<?php

		$sql = "SELECT * FROM produtos ORDER BY id_produto DESC";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<section id='meio'>";

		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		     	echo "<article class='cprod'";
		        echo '<p  style="color:#000; font-family:arial; text-align:center; line-height:20px; padding:20px";>'.$row["nome_produto"],"</p>","</br>";
		         echo "<img src='Fotos//".$row["foto"]."' style='width:200px;height:200px;'/>","</br><br>";
		        echo "<a class='maisInfo' href='dados.php?id_produto=".$row["id_produto"]."'>+ informações</a>";
		        echo "</article>";

		      
		    }

		    echo "</section>";

		} else {
		    echo "0 resultados";
		}
		$conn->close();

	?>


</body>
</html>