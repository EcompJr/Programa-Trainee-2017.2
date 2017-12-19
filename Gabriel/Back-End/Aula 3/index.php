<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="routes/routes.php" method="POST">  
        <input type="text" name="name" placeholder="Nome"/>
        <input type="text" name="email" placeholder="Email"/>
        <input type="password" name="password" placeholder="Senha"/>
        <input type="date" name="birthDate" placeholder="Data de Nascimento"/>
        <input type="submit" name="registerAttempt"/>
    </form>

    <?php
        if(isset($_GET["register"]) && $_GET["register"] == "true") {
            echo "<h1>Membro Registrado!</h1>";
        }
    ?>

    <h1>Login</h1>
    <form action="routes/routes.php" method="POST">  
        <input type="text" name="email" placeholder="Email"/>
        <input type="password" name="password" placeholder="Senha"/>
        <input type="submit" name="loginAttempt"/>
    </form>

    <?php
        if(isset($_GET["valid"]) && $_GET["valid"] == "false") {
            echo "<h1> Login negado! </h1>";
        }
    ?>
</body>
</html>