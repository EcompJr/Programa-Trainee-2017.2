<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FIZZBUZZ</title>
</head>
<body>
	<?php 
		$i = 0;

		for($i = 0; $i <= 30; $i++){
			if($i % 3 == 0 && $i % 5 == 0 && $i != 0){
				echo "FizzBuzz";
			}else if($i % 5 == 0 && $i != 0){
				echo "Buzz";
			}else if($i % 3 == 0 && $i != 0){
				echo "Fizz";
			}else{
				echo "$i";
			}
			echo '<br>';
	}

	 ?>
</body>
</html>