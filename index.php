<?php

require_once ("vendor/autoload.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Login</title>
</head>
<body>

<div class="login-page">
  <div class="form">
    <form class="register-form" action="src/miniapp/web/accueil.php" method="POST">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <input type="submit" value="create" />
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="src/miniapp/web/accueil.php" method="POST">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name ="password" placeholder="password"/>
      <input type="submit" value="login" />
      <p class="message">Not registered? <a onclick="test()" href="#">Create an account</a></p>
    </form>
  </div>
</div>


</body>
<script>
    var formulaire = document.getElementsByClassName("form");


</script>
</html>