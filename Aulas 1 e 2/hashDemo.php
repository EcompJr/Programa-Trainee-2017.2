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
        $hash = [
            "nome" => "Valmir",
            "idade" => 21,
            "semestralizado" => false
        ];

        echo "Nome: " . $hash["nome"];
        echo "<br>";
        echo "Idade: " . $hash["idade"]; 
        echo "<br>";
        echo "Semestralizado: ";
        echo $hash["semestralizado"] ? "sim" : "não"; 
    ?>
</body>
</html>