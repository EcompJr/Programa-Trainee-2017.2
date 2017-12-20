<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		for($i=1;$i<31;$i++){
			if($i%3==0 && $i%5==0)
				echo "FizzBuzz";
			elseif($i%3==0)
				echo "Fizz";
			elseif($i%5==0)
				echo "Buzz";
			else
				echo $i;
			echo "<br>";	 
		}
	 ?>
</body>
</html>