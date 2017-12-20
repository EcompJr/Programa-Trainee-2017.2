<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        for($i = 1; $i <= 30; $i++) {
            if($i % 3 == 0 && $i % 5 == 0) {
                echo "Fizz Buzz";
                echo "<br>";   
            } else {
                if($i % 3 == 0) {
                    echo "Fizz";
                    echo "<br>";
                } else if($i % 5 == 0) {
                    echo "Buzz";
                    echo "<br>";   
                } else {
                    echo $i;
                    echo "<br>";                           
                }
            }
        }
    ?>
</body>
</html>