<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='formReceptorDemo.php' method='POST'>
        <input type='text' name='nome' placeholder="nome"/>
        <select name="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        </select>
        <input type='submit'/>
    </form>

    <?php
        if(isset($_GET["valid"])) {
            if($_GET["valid"] == 'true') {
                echo "Nome correto";
            } else {
                echo "Nome incorreto";
            }
        }
    ?>
</body>
</html>