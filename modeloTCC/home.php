<?php ?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="js/home.js">
    </head>
    <body>

       <header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                Customers
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white" href="index.php">SAIR</a></button>
        </div>
      </div>
    </div>
  </header>

        <hr>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div id="section-notificacao" >
                        <h2 >NOTIFICAÇÕES</h2>
                        <form>

                        </form>
                    </div>
                </div>
                <div class="col-7">


                    <input type="submit" value="PACIENTE" name="paciente" />
                    <input type="submit" value="CONSULTA" name="consulta" />
                    <input type="submit" value="PRÓTESE" name="protese" />
                    <input type="submit" value="LEMBRETE" name="lembrete" />

                    <input type="submit" value="USUÁRIO" name="usuario" />
                    <input type="submit" value="VALORES" name="valores" />
                    <input type="submit" value="DENTISTAS" name="dentistas" />
                    <input type="submit" value="CLÍNICAS" name="clinicas" />
                </div>


                <div class=" col-1">
                    <a  href="index.php" >LOGOUT</a>
                </div>






            </div>

        </div>

        <script src="js/bootstrap.js"</script>
        <script src="js/bootstrap.min.js" </script>
        <script src="js/JQuery.js"></script>
        <script src="js/JQuery.min.js"></script>
    </body>


</html>

