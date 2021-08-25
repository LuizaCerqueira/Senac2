

<?php ?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">




    </head>

    <body style="background-image: url(img/Clínica-Odontológica.jpg); background-repeat: no-repeat; background-size: 100%">

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #007979;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/DL_Strapline_Black.png" alt="" width="200" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="#" >
                                <div id="passar_mouse" >
                                    <img src="img/home.png" width="30" height="30" alt="home"  />
                                    <div id="mostrar" >Home</div>
                                </div>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/carteira-de-identidade.png" width="30" height="30" alt="carteira id"/>
                                    <div id="mostrar" >Paciente</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/consulta.png" width="30" height="30" alt="consulta"/>
                                    <div id="mostrar" >Consulta</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div id="passar_mouse" >
                                    <img src="img/dentadura.png" width="30" height="30" alt="dentadura"/>
                                    <div id="mostrar" >Dentadura</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/settings.png" width="30" height="30" alt="sentings"/>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Parceiros</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>


                    <a class="nav-link" href="#" >
                        <div id="passar_mouse" >
                            <img src="img/sair.png" width="40" height="40" alt="sair"/>
                            <div id="mostrar" style="color: black">Sair</div>
                        </div>
                    </a>

                    <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>

        </nav>
        <br>
        <div class="container-fluid">
            <div class="row" >

                <div class="col-4 offset-1 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                    <div >

                        <form style="color: white">
                            <h3 style="text-align: center">Cadastro Dentista</h3>
                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" class="form-control" name="idDentista" readonly placeholder="Número">
                            </div>

                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nomeDentista">
                            </div>

                            <div class="form-group">
                                <label >Clínica Filiada</label>
                                <select class="form-control" name="idClinica">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>clinica1</option>
                                    <option>clinica2</option>
                                    <option>clinica3</option>

                                </select>
                            </div>
                            <br>
                            <div class="offset-3">
                            <input type="submit" name="cadastrarPaciente"
                                   class="btn btn-success btInput" value="Enviar"
                                   <?php //if ($btEnviar == TRUE) echo "disabled"; ?>>

                            <input type="submit" name="atualizarPaciente"
                                   class="btn btn-warning btInput" value="Atualizar"
                                   <?php //if ($btAtualizar == FALSE) echo "disabled"; ?>>
                            <br><br>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-4 offset-1 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                    
                    <div>
                        
                            <form style="color: white">
                                <h3 style="text-align: center">Cadastro Clínica</h3>
                                <div class="form-group">
                                    <label>Código</label>
                                    <input type="text" class="form-control" name="idClinica" readonly placeholder="Número">
                                </div>

                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="nomeClinica">
                                </div>
                                <br>
                                <br>
                                <div class=" offset-3">
                                <input type="submit" name="cadastrarPaciente"
                                       class="btn btn-success btInput" value="Enviar"
                                       <?php //if ($btEnviar == TRUE) echo "disabled"; ?>>

                                <input type="submit" name="atualizarPaciente"
                                       class="btn btn-warning btInput" value="Atualizar"
                                       <?php //if ($btAtualizar == FALSE) echo "disabled"; ?>>
                                </div>
                            </form>
                        </div>
                </div>

            </div>

        </div>







        <script src="js/bootstrap.bundle.min.js"></script>



    </body>


</html>








