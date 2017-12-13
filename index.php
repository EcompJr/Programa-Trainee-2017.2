<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		echo "Hello World <br>";
		$name = "Gledson";
		$age = 22;
		echo "Meu nome é $name e minha idade é $age <br>";
		echo "Meu nome é "."$name"." e Minha idade é"." $age";
		if($name == "Gledson" && $age === 22){
			echo "<br> Não sou velho, sou sábio";
		}else{
			echo "<h1> Não sou sábio, sou velho </h1>";
		}
		echo "<br>";
		for($i =0;$i<10;$i++){
			echo $i."<br>";
		}
	 ?>	
</body>
</html>
