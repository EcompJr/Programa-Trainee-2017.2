<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="receiver.php" method="POST">
		<input type="text" name="Nome" placeholder="nome" ><br>
		<input type="text" name="idade"><br>
		<input type="submit" name="enviar" value="enviar"><br>
	</form>
	<?php
		$colors = array('Vermelho' => "red", 'azul'=>"Blue", 'misera' => "uhuu");
		echo $colors['Vermelho'];
		echo "<br>";
	?>
	<a href="index.php">Voltar</a>	
</body>
</html>