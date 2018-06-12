<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>

    <?php 
        if (!isset($_SESSION["loged_user"])) {
            header("location: index.php?userMustBeLogged=true");
            die();
        }
    ?>
        
    <div class="alert alert-success">
        <strong>Sucesso!</strong> usuário <?= $_SESSION["loged_user"] ?> logado!
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="container">
        <form class="register-form" action="logout.php" method="POST">
            <input type="submit" value="LOGOUT">
        </form>
    </div>
</body>
</html>