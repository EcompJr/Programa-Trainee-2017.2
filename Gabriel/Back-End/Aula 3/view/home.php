<?php
    session_start(); 
    
    if(!isset($_SESSION["auth"])) {
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seu Site</title>
</head>
<body>
    <?php
        if(isset($_SESSION["auth"]) && $_SESSION["auth"] == "true") {
            echo "<h1>Você está logado!</h1>";
            echo "<form method='POST' action='../routes/routes.php'>
                    <input type='submit' name='logoutAttempt' value='Logout'/>
                </form>";

            
        }
    ?>
</body>
</html>