<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		for ($i=1; $i < 31; $i++) { 
			if ($i % 3 == 0 && $i % 5 == 0) {
				echo "$i -> FizzBuzz<br>";
			}
			else if ($i % 3 == 0 && $i % 5 != 0) {
				echo "$i -> Fizz<br>";
			}
			else if ($i % 3 != 0 && $i % 5 == 0) {
				echo "$i -> Buzz<br>";
			}
			else{
				echo "$i -> ........<br>";
			}
		}
	?>
	<a href="index.php">Bora voltar ne?</a>
</body>
</html>