<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Etec</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="info">
      <h1>Login Etec</h1>
      <span>
        Feito com muito <i class="fa fa-heart"></i> pelo <a href="http://andytran.me">Andy Tran</a>
      </span>
    </div>
  </div>

  <?php
  
  session_start();
  
  if (isset($_SESSION["loged_user"])) {
    header("Location: home.php");
    die();
  }
  
  ?>


   <?php if (isset($_GET["userMustBeLogged"])) { ?>
    <div class="alert alert-danger">
      <strong>Erro!</strong> usuário precisa se logar antes
    </div>
  <?php } ?>



  <?php if (isset($_GET["loginerror"])) { ?>
    <div class="alert alert-danger">
      <strong>Erro!</strong> usuário ou senha inválidos
    </div>
  <?php } ?>

<div class="form">
    
    <div class="thumbnail">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg" />
    </div>
    
    <form class="register-form" action="signin.php" method="POST">
      <input type="text" name="user" placeholder="usuário" />
      <input type="password" name="password" placeholder="senha" />
      <input type="text" name="mail" placeholder="e-mail" />
      <input type="submit" value="CRIAR">
      <p class="message">Já possui uma conta?
        <a href="#">Faça o login</a>
      </p>
    </form>

    <form class="login-form" action="login.php" method="POST">
      <input type="text" name="user" placeholder="user" />
      <input type="password" name="password" placeholder="senha" />
      <input type="submit" value="LOGAR">
      <p class="message">Ainda não possui uma conta?
        <a href="#">Crie uma agora!</a>
      </p>
    </form>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>

</html>