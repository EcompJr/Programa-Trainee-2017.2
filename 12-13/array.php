<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ARRAY</title>
</head>
<body>
	<?php 
		$arrai = array("Black", "White", "Green", "Yellow");

		foreach($arrai as $arra) {
			echo "Cor $arra";
			echo "<br>";
		}
		//Depurando o codigo do array
		var_dump($arrai);

	 ?>
</body>
</html>