<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	$t = date("H");
	
	if($t > "3" && $t < "1"){
		echo "Have a good day!";
	}
	else if ($t < "18" && $t > "1") {
	    ECHO "BOA TARDe RAPAZIADAAAAAA";
	}
	else{
		echo "boa noite";
	}
	?><br>
	<a href="fizzbuzz.php"> FIZZBUZZ</a><br>
	<a href="array.php"> ARRAY</a><br>
	<a href="super.php">Super</a><br>
</body>
</html>