


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
                <div class="col-12  bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                    <h3 style="text-align: center; color: white">Cadastro Prótese</h3>
                </div>

                <div class="col-6 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                    <div>
                        <form style="color: white">

                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" class="form-control" name="idProtese" readonly placeholder="Número">
                            </div>

                            <div class="form-group">
                                <label >Tipo</label>
                                <select class="form-control" name="tipo">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>tipo1</option>
                                    <option>tipo2</option>
                                    <option>tipo3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label >Posição</label>
                                <select class="form-control" name="posicao">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>posição1</option>
                                    <option>posição2</option>
                                    <option>posição3</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label >Material</label>
                                <select class="form-control" name="material">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>material1</option>
                                    <option>material2</option>
                                    <option>material3</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label >Extensão</label>
                                <select class="form-control" name="extensao">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>extensao1</option>
                                    <option>extensao2</option>
                                    <option>extensao3</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label >Quantidade de dentes</label>
                                <input type="number" class="form-control" name="qtdDentes">
                            </div>
                            <br>

                        </form>
                    </div>
                </div>



                <div class="col-6 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">

                    <div>
                        <form style="color: white">

                            <div class="form-group">
                                <label >Tipo de dente</label>
                                <select class="form-control" name="tipoDente">
                                    <option hidden="">[SELECIONE]</option>
                                    <option>Tipo 1</option>
                                    <option>Tipo2</option>
                                    <option>Tipo3</option>

                                </select>
                            </div>

                            <br>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="denteOuro" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dente de Ouro?
                                </label>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Valor</label>
                                <input type="text" class="form-control" name="valor" >
                            </div>
                            <br>

                            <label>Status:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Fabricando
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Finalizado
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                                <label class="form-check-label" for="exampleRadios3">
                                    Entregue
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Data</label>
                                <input type="date" class="form-control" name="dataRegistro" readonly="">
                            </div>

                            <div class="form-group">
                                <label>Prontuário</label>
                                <input type="text" class="form-control" name="prontuario" readonly="">
                            </div>
                            <br>
                        </form>
                    </div>

                </div>

                <div class="col-12  bg-gradient" style=" background-color: black;opacity: 100%">
                    <div class="offset-5">
                        <input type="submit" name="cadastrarProtese"
                               class="btn btn-success btInput" value="Enviar"
                               <?php //if ($btEnviar == TRUE) echo "disabled"; ?>>

                        <input type="submit" name="atualizarProtese"
                               class="btn btn-warning btInput" value="Atualizar"
                               <?php //if ($btAtualizar == FALSE) echo "disabled"; ?>>
                    </div>
                </div>

            </div>

        </div>








        <script src="js/bootstrap.bundle.min.js"></script>



    </body>


</html>








