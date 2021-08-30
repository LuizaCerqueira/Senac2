<?php

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    
    <title>Login</title>
<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  
  
  
  <body class="text-center" style="background-image: url(img/Clínica-Odontológica.jpg);background-repeat: no-repeat; background-size: 100%">
    
<main class="form-signin">
  <form>
      <img class="mb-4" src="img/usuario.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" >
      <label for="floatingInput"><span> <img src="img/user.png" width="30" height="30" alt="user"/></span></label>
    </div>
    
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"><span> <img src="img/senha.png" width="30" height="30" alt="senha"/></span></label>
    </div>

    <div class="checkbox mb-3">
        <label style="color: white">
          <input type="checkbox" value="lembre-me"> Lembre-me
      </label>
    </div>
    <button class="w-100 btn btn-lg" style="background-color: #007979; opacity: 90%" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


    
  </body>
</html>
