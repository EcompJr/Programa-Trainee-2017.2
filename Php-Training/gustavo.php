<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$names = array("gustavo","saulo","gledson");

		foreach ($names as $pessoa) {
			echo "$pessoa é brother <br>";
		}
		var_dump($names);
		echo "<br>";
		print_r($names);
	  ?>
</body>
</html>