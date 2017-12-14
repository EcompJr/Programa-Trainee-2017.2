<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INDEX</title>
</head>
<body>
	<?php 
		$name = 'Ramon';
		$age = 19;
		$i = 0;
		echo "Hello World, my name is $name, i have $age years old.";
		echo '<br>';
		echo "Hello World".","."my name is $name".","."i have $age years old.";
		//Condicional
		if($name == 'Ramon'){
			echo "Sou eu mesmo.";
		}
		else{
			echo "Nao sou eu. Boqueado!";
		}
		echo '<br>';
		//Repetição
		for($i = 0; $i < 5; $i++){
			echo "$i ";
	}
	?>
</body>
</html>
