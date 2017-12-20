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
        echo "Oi, meu nome é" . $_GET['nome'] . ", tenho ". $_GET['idade'] . "anos e estou " . $_GET['relacionamento'];
        //var_dump($_GET);
        //http://localhost:8080/getDemo.php?nome=Valmir&idade=21&relacionamento=solteiro
        //if(!isset($_GET['aaaaa'])) {
        //    echo "aaaa não definida";
        //}
    ?>
</body>
</html>