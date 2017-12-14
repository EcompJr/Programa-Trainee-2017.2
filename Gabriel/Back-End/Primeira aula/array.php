<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$colors = array("Azul", "Amarelo", "Vermelho", "Verde");

		foreach ($colors as $color) {
			
			if ($color == "Amarelo") {
				echo "<div align='center' style='background-color: yellow; width:500px; height:50px;'>Cor $color</div>";
			}
			else if ($color == "Azul") {
				echo "<div align='center' style='background-color: blue; width:500px; height:50px;'>Cor $color</div>";
			}
			else if ($color == "Vermelho") {
				echo "<div align='center' style='background-color: red; width:500px; height:50px;'>Cor $color</div>";
			}
			else if ($color == "Verde") {
				echo "<div align='center' style='background-color: green; width:500px; height:50px;''>Cor $color </div>";
			}
		}
	?>
	<a href="index.php">Voltar</a>
</body>
</html>