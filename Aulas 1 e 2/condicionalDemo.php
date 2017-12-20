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
        $name = 'Valmir';
        $age = 21;
        echo "Hello World. Meu nome é $name e tenho $age anos (teria, se estivesse vivo).";

        if($name == "Valmir" && $age === "21") {
            echo "É, sou eu";
        } else {
            echo "Desconhecido";
        }

        for($i = 0; $i < 30; $i++) {
            echo "Hello World. Meu nome é $name e tenho $age anos (teria, se estivesse vivo).";            
        }

    ?>
</body>
</html>