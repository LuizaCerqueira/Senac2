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
        <div class="row">
            <div class="col-4 offset-4 bg-gradient rounded-3" style=" background-color: black;opacity: 80%">
                <form style="color: white">
                    <h3>Cadastro Paciente</h3>
                    <div class="form-group">
                        <label>Número Prontuário</label>
                        <input type="text" class="form-control" name="prontuario" readonly placeholder="Número">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="form-group">
                        <label>Sexo</label>
                        <input type="text" class="form-control" name="sexo" >
                    </div>

                    <div class="form-group">
                        <label>Início do Tratamento </label>
                        <input type="date" class="form-control" name="dtInicio">
                    </div>


                    <div class="form-group">
                        <label >Dentista</label>
                        <select class="form-control" name="idDentista">
                            <option hidden="">[SELECIONE]</option>
                            <option>dentista1</option>
                            <option>dentista2</option>
                            <option>dentista3</option>



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
                    </div>
                    <br>
                    
                </form>



            </div>
        </div>






        <!--        <div class="form-group">
                            <label for="exampleFormControlSelect2">Exemplo de select múltiplo</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
        -->



        <script src="js/bootstrap.bundle.min.js"></script>



    </body>


</html>


<!--
$listaFornecedores= $fc->listarFornecedor();
if($listaFornecedores != null){
foreach ($listaFornecedores as $lf){
?>
<!--<option value="<?php //echo $lf->getIdFornecedor();    ?>"-->

<?php
/*$pr->getFornecedor()->getIdfornecedor();
if ($pr->getFornecedor()->getIdfornecedor() != "") {
    if ($lf->getIdfornecedor() == $pr->getFornecedor()->getIdfornecedor()) {
        echo "selected = 'selected'";
    }
}
?>
>

<?php echo $lf->getNomeFornecedor(); ?><!--</option>-->
<?php
/*
  }
  }
 */

