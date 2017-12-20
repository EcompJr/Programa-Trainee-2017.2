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
        $variasCores = array("Azul", "Amarelo", "Vermelho", "Verde");

        foreach($variasCores as $umaCor) {
            echo "Cor $umaCor";
            echo "<br>";
        }

        var_dump($variasCores);

        
    ?>
</body>
</html>